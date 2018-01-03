<?php namespace FreedomCore\TrinityCore\Character\Classes;


use FreedomCore\TrinityCore\Character\Character;
use FreedomCore\TrinityCore\Character\Classes\Boost\GearSets;
use FreedomCore\TrinityCore\Character\Models\Character as CharacterModel;
use FreedomCore\TrinityCore\Character\Models\CharacterInventory;
use FreedomCore\TrinityCore\Character\Models\CharacterSkill;
use FreedomCore\TrinityCore\Character\Models\ItemInstance;
use FreedomCore\TrinityCore\Console\Client as SOAPClient;
use FreedomCore\TrinityCore\Support\Classes\Durability;
use FreedomCore\TrinityCore\Support\Classes\Item;
use FreedomCore\TrinityCore\Support\Classes\Items;
use FreedomCore\TrinityCore\Support\Common\Helper;

/**
 * Class Boost
 * @package FreedomCore\TrinityCore\Character\Classes
 */
class Boost {

    /**
     * SOAPClient Instance
     * @var SOAPClient|null
     */
    protected $client = null;

    /**
     * GearSets Instance
     * @var GearSets|null
     */
    protected $gear = null;

    /**
     * Title of the message
     * @var null|string
     */
    protected $messageTitle = null;

    /**
     * Body of the message
     * @var null|string
     */
    protected $messageBody = null;

    /**
     * Character super class reference
     * @var Character|null
     */
    protected $super = null;

    /**
     * Character Instance
     * @var null|CharacterModel
     */
    protected $character = null;

    /**
     * Boost Data Array
     * @var array
     */
    protected $boostData = [
        'level' =>  0,
        'spec'  =>  0,
        'gear'  =>  []
    ];

    /**
     * Professions boost for level
     * @var array
     */
    protected $professionsBoost = [
        90  =>  600,
        100 =>  700
    ];

    /**
     * Money boost for level
     * @var array
     */
    protected $moneyBoost = [
        90  =>  1500000,
        100 =>  5000000
    ];

    /**
     * Boost constructor.
     * @param Character $character
     * @param SOAPClient $client
     */
    public function __construct(Character $character, SOAPClient $client) {
        $this->super = $character;
        $this->character = $character->model();
        $this->client = $client;
        $this->gear = new GearSets();
    }

    /**
     * Get Client Instance
     * @return SOAPClient
     */
    public function getClient() : SOAPClient {
        return $this->client;
    }

    /**
     * Get Gear Instance
     * @return GearSets
     */
    public function getGear() : GearSets {
        return $this->gear;
    }

    /**
     * Get message title
     * @return string
     */
    public function getMessageTitle() : string {
        return ($this->messageTitle !== null) ? $this->messageTitle : 'undefined';
    }

    /**
     * Get message body
     * @return string
     */
    public function getMessageBody() : string {
        return ($this->messageBody !== null) ? $this->messageBody : 'undefined';
    }

    /**
     * Set Client Instance
     * @param SOAPClient $client
     * @return Boost
     */
    public function setClient(SOAPClient $client) : Boost {
        $this->client = $client;
        return $this;
    }

    /**
     * Set Gear Instance
     * @param GearSets $gearSets
     * @return Boost
     */
    public function setGear(GearSets $gearSets) : Boost {
        $this->gear = $gearSets;
        return $this;
    }

    /**
     * Set message title
     * @param string $title
     * @return Boost
     */
    public function setMessageTitle(string $title) : Boost {
        $this->messageTitle = $title;
        return $this;
    }

    /**
     * Set message body
     * @param string $body
     * @return Boost
     */
    public function setMessageBody(string $body) : Boost {
        $this->messageBody = $body;
        return $this;
    }

    /**
     * Specify the level we want to boost character to
     * @param int $level
     * @return Boost
     */
    public function boostTo(int $level) : Boost {
        $character = $this->character;
        if ($this->character->level >= $level)
            throw new \RuntimeException('Character ' . $character->name . ' is already at the level ' . $character->level . ' thus it cannot be boosted to level ' . $level);
        $this->boostData['level'] = $level;
        return $this;
    }

    /**
     * Select spec for character
     * @param int $spec
     * @return Boost
     */
    public function withSpec(int $spec) : Boost {
        if ($this->boostData['level'] === 0)
            throw new \RuntimeException('You have to specify the level for the character boost first using the boostTo() method!');
        $character = $this->character;
        $this->gear->isGearingStrategyLoaded();
        $this->boostData['gear'] = $this->gear->getClassDataByLevel($character->class, $this->boostData['level']);
        if (!array_key_exists($spec, $this->boostData['gear']))
            throw new \RuntimeException('This character does not have a spec with ID #' . $spec . ', please consider using one of the following available specs: ' . implode(', ', array_keys($this->boostData['gear'])));
        $this->boostData['spec'] = $spec;
        return $this;
    }

    /**
     * Actually boost character
     * @param bool $boostProfessions
     * @throws \Exception
     * @return bool
     */
    public function boost(bool $boostProfessions = false) : bool {
        try {
            $this->validateMessageStructure();
            $this->sendOldItemsToCharacter();
            if ($this->character->online) {
                $this->client->character()->kick($this->character->name, 'Character boost is in progress!');
                $this->character->update(['online' => 0]);
            }
            if ($boostProfessions && $this->character->level >= 60)
                $this->boostProfessions();
            $this->character->update([
                'level' =>  $this->boostData['level'],
                'money' =>  $this->character->money + $this->moneyBoost[$this->boostData['level']]
            ]);
        } catch (\Exception $exception) {

            return false;
        }
        return true;
    }

    /**
     * Validate message structure
     */
    private function validateMessageStructure() {
        if ($this->messageTitle === null)
            Helper::throwRuntimeException('In order to be able to perform this action, you have to set the message title first using the setMessageTitle() method!');
        if ($this->messageBody === null)
            Helper::throwRuntimeException('In order to be able to perform this action, you have to set the message body first using the setMessageBody() method!');
    }

    /**
     * Send old items to the character via in-game mail system
     * @param bool $deleteItems
     * @throws \Exception
     */
    private function sendOldItemsToCharacter(bool $deleteItems = true) {
        $mailBack = [];
        $super = $this->super;
        /**
         * @var Item $item
         */
        foreach ($super->inventory() as $item) {
            if (array_key_exists($item->getSlot(), $this->boostData['gear'][$this->boostData['spec']])) {
                $newItem = new Item();
                $newItem->setItemID($item->getItemID());
                $mailBack[] = $newItem;
                if ($deleteItems)
                    $this->deleteItemInstance($item->getUpdatedInstance());
            }
        }
        $chunks = array_chunk($mailBack, 12);
        if (count($chunks) > 1) {
            $messageBody = $this->getMessageBody();
            $messageBody .= "\n\nThis is the message %s out of " . count($chunks);
            $this->setMessageBody($messageBody);
        }
        foreach ($chunks as $chunk) {
            $this->client->send()->items($this->character->name, $this->getMessageTitle(), $this->getMessageBody(), new Items($chunk));
        }
        /**
         * @var int $item
         */
        foreach ($this->boostData['gear'][$this->boostData['spec']] as $slot => $item) {
            if ($super->reader()->isFileOpened()) {
                $itemData = new Item();
                $itemData->attachReader($super->reader())->autoloadItemData(true);
                $itemData->setItemID($item)->setSlot($slot);
                $this->createItemInstance($itemData);
            } else {
                Helper::throwRuntimeException('You have to include DB2Reader reference in order to be able to perform character boost!');
            }
        }
    }

    /**
     * Delete item reference and item inventory entry
     * @param ItemInstance $instance
     * @throws \Exception
     */
    protected function deleteItemInstance(ItemInstance $instance) {
        ItemInstance::destroy($instance->guid);
        CharacterInventory::destroy($instance->guid);
    }

    /**
     * Equip new items on the character
     * @param Item $item
     * @return int
     */
    protected function createItemInstance(Item $item) {
        $durability = new Durability($item);
        try {
            $guid = (int) ItemInstance::incrementID();
            $item->setItemGuid($guid);
            $item->setOwnerGuid($this->character->guid);
            $item->setDurability($durability->getItemDurability());
            $item->setInventoryGuid($this->character->guid);
            $item->getUpdatedInstance()->save();
            $item->getUpdatedInventory()->save();
            return $guid;
        } catch (\Exception $e) {
            dd('Unrecoverable error occurred while tried to create item ' . $item->getItemID() . ' for character ' . $this->character->guid . PHP_EOL . 'Exception occured: ' . $e->getMessage());
        }
        return 0;
    }

    /**
     * Boost characters professions
     */
    protected function boostProfessions() {
        $super = $this->super;
        if (!empty($super->professions())) { // Character has professions, so we are boosting them
            $boostProfessionsTo = $this->professionsBoost[$this->boostData['level']];
            /**
             * @var CharacterSkill $profession
             */
            foreach ($super->professions() as $profession) {
                $profession->value = $boostProfessionsTo;
                $profession->save();
            }
        } else { // Character has no professions, we should provide ones based on the equipped gear type
            dd('No professions found!');
        }
    }

}