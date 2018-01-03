<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstance
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $itemEntry
 * @property int $owner_guid
 * @property int $creatorGuid
 * @property int $giftCreatorGuid
 * @property int $count
 * @property int $duration
 * @property string|null $charges
 * @property int $flags
 * @property string $enchantments
 * @property int $randomPropertyType
 * @property int $randomPropertyId
 * @property int $durability
 * @property int $playedTime
 * @property string|null $text
 * @property int $transmogrification
 * @property int $upgradeId
 * @property int $enchantIllusion
 * @property int $battlePetSpeciesId
 * @property int $battlePetBreedData
 * @property int $battlePetLevel
 * @property int $battlePetDisplayId
 * @property int $context
 * @property string|null $bonusListIDs
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereBattlePetBreedData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereBattlePetDisplayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereBattlePetLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereBattlePetSpeciesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereBonusListIDs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereCharges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereContext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereCreatorGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereDurability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereEnchantIllusion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereEnchantments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereGiftCreatorGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereItemEntry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereOwnerGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance wherePlayedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereRandomPropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereRandomPropertyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereTransmogrification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstance whereUpgradeId($value)
 * @mixin \Eloquent
 */
class ItemInstance extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'item_instance';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guid';
    /**
    * @inheritdoc
    * @var bool
    */
    public $incrementing = true;
    /**
    * @inheritdoc
    * @var bool
    */
    public $timestamps = false;
    /**
    * @inheritdoc
    * @var array
    */
    protected $casts = [
        'guid' => 'int',
        'itemEntry' => 'int',
        'owner_guid' => 'int',
        'creatorGuid' => 'int',
        'giftCreatorGuid' => 'int',
        'count' => 'int',
        'duration' => 'int',
        'flags' => 'int',
        'enchantments' => 'string',
        'randomPropertyType' => 'int',
        'randomPropertyId' => 'int',
        'durability' => 'int',
        'playedTime' => 'int',
        'transmogrification' => 'int',
        'upgradeId' => 'int',
        'enchantIllusion' => 'int',
        'battlePetSpeciesId' => 'int',
        'battlePetBreedData' => 'int',
        'battlePetLevel' => 'int',
        'battlePetDisplayId' => 'int',
        'context' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'guid',
        'itemEntry',
        'owner_guid',
        'creatorGuid',
        'giftCreatorGuid',
        'count',
        'duration',
        'charges',
        'flags',
        'enchantments',
        'randomPropertyType',
        'randomPropertyId',
        'durability',
        'playedTime',
        'text',
        'transmogrification',
        'upgradeId',
        'enchantIllusion',
        'battlePetSpeciesId',
        'battlePetBreedData',
        'battlePetLevel',
        'battlePetDisplayId',
        'context',
        'bonusListIDs'
    ];
}
