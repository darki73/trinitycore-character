<?php namespace FreedomCore\TrinityCore\Character;

use FreedomCore\TrinityCore\Character\Classes\Boost;
use FreedomCore\TrinityCore\Console\Client as SOAPClient;
use FreedomCore\TrinityCore\Support\Classes\Durability;
use FreedomCore\TrinityCore\Support\Classes\Item;
use FreedomCore\TrinityCore\Support\Classes\Profession;
use FreedomCore\TrinityCore\Support\Common\Helper;
use FreedomCore\TrinityCore\Support\DB2Reader;
use Illuminate\Filesystem\Filesystem;
use FreedomCore\TrinityCore\Character\Models\Character as CharacterModel;
use Illuminate\Support\Collection;

/**
 * Class Character
 * @package FreedomCore\TrinityCore\Character
 */
class Character
{

    /**
     * Package Version
     * @var string|null
     */
    protected $version = null;

    /**
     * FileSystem Instance
     * @var Filesystem|\Illuminate\Foundation\Application|mixed|null
     */
    protected $fileSystem = null;

    /**
     * DB2Reader Instance
     * @var null|DB2Reader
     */
    protected $reader = null;

    /**
     * Character Model Instance
     * @var null|CharacterModel
     */
    protected $character = null;

    /**
     * Character Inventory Array
     * @var array
     */
    protected $inventory = [];

    /**
     * Character professions collection
     * @var \Illuminate\Support\Collection
     */
    protected $professions = [];

    /**
     * Character constructor.
     * @param string $characterName
     * @param DB2Reader|null $reader
     * @throws \Exception
     */
    public function __construct(string $characterName = '', DB2Reader $reader = null)
    {
        $this->fileSystem = app(FileSystem::class);
        $this->reader = $reader;
        $this->findPackageVersion();
        if (strlen($characterName) > 1) {
            $this->loadCharacterData($characterName);
        }
    }

    /**
     * Load character data
     * @param string $characterName
     * @throws \Exception
     */
    public function loadCharacterData(string $characterName)
    {
        $this->loadCharacterModelData($characterName)->loadCharacterInventory()->loadCharacterProfessions();
    }

    /**
     * Get character model
     * @return CharacterModel
     */
    public function model() : CharacterModel
    {
        return $this->character;
    }

    /**
     * Get reader instance
     * @return DB2Reader
     */
    public function reader() : DB2Reader
    {
        if ($this->reader === null) {
            Helper::throwRuntimeException('DB2Reader has not been instantiated!');
        }
        return $this->reader;
    }

    /**
     * Get character inventory
     * @return array
     */
    public function inventory() : array
    {
        return $this->inventory;
    }

    /**
     * Get character professions
     * @return Collection
     */
    public function professions() : Collection
    {
        return $this->professions;
    }

    /**
     * Character boost interface
     * @param SOAPClient $client
     * @return Boost
     */
    public function boost(SOAPClient $client) : Boost
    {
        return (new Boost($this, $client));
    }

    /**
     * Find Package Version
     */
    protected function findPackageVersion()
    {
        if (!is_null($this->version)) {
            return;
        }
        if ($this->fileSystem->exists(base_path('composer.lock'))) {
            $file = json_decode(
                $this->fileSystem->get(base_path('composer.lock'))
            );
            foreach ($file->packages as $package) {
                if ($package->name == 'freedomcore/trinitycore-character') {
                    $this->version = $package->version;
                    break;
                }
            }
        }
    }

    /**
     * Load character data
     * @param string $characterName
     * @return Character
     */
    protected function loadCharacterModelData(string $characterName) : Character
    {
        $characterName = Helper::getCharacterName($characterName);
        $characterData = CharacterModel::where('name', $characterName)->first();
        if ($characterData === null) {
            throw new \RuntimeException('Unable to find character with name: ' . $characterName);
        } else {
            $this->character = $characterData;
        }
        return $this;
    }

    /**
     * Load character inventory
     * @return Character
     * @throws \Exception
     */
    protected function loadCharacterInventory() : Character
    {
        $characterInventory = $this->character->inventory;
        $characterItems = [];
        foreach ($characterInventory as $inventoryEntry) {
            $reference = $inventoryEntry->reference;
            $item = new Item($inventoryEntry, $reference);
            if ($this->reader !== null) {
                $item->attachReader($this->reader)->autoloadItemData(true);
                $item->setItemID($reference->itemEntry);
            }
            $characterItems[] = $item;
        }
        $this->inventory = $characterItems;
        return $this;
    }

    /**
     * Load character professions
     * @return Character
     * @throws \Exception
     */
    protected function loadCharacterProfessions() : Character
    {
        $profession = new Profession();
        $profession->loadProfessions(new DB2Reader(true));
        $profession->loadCharacterProfessions($this->character);
        $this->professions = $profession->getCharacterProfessions();
        return $this;
    }
}
