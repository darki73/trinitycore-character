<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterTransmogOutfit
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $setguid
 * @property int $setindex
 * @property string $name
 * @property string $iconname
 * @property int $ignore_mask
 * @property int $appearance0
 * @property int $appearance1
 * @property int $appearance2
 * @property int $appearance3
 * @property int $appearance4
 * @property int $appearance5
 * @property int $appearance6
 * @property int $appearance7
 * @property int $appearance8
 * @property int $appearance9
 * @property int $appearance10
 * @property int $appearance11
 * @property int $appearance12
 * @property int $appearance13
 * @property int $appearance14
 * @property int $appearance15
 * @property int $appearance16
 * @property int $appearance17
 * @property int $appearance18
 * @property int $mainHandEnchant
 * @property int $offHandEnchant
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereAppearance9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereIconname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereIgnoreMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereMainHandEnchant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereOffHandEnchant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereSetguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterTransmogOutfit whereSetindex($value)
 * @mixin \Eloquent
 */
class CharacterTransmogOutfit extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'setguid';
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
        'setindex' => 'int',
        'ignore_mask' => 'int',
        'appearance0' => 'int',
        'appearance1' => 'int',
        'appearance2' => 'int',
        'appearance3' => 'int',
        'appearance4' => 'int',
        'appearance5' => 'int',
        'appearance6' => 'int',
        'appearance7' => 'int',
        'appearance8' => 'int',
        'appearance9' => 'int',
        'appearance10' => 'int',
        'appearance11' => 'int',
        'appearance12' => 'int',
        'appearance13' => 'int',
        'appearance14' => 'int',
        'appearance15' => 'int',
        'appearance16' => 'int',
        'appearance17' => 'int',
        'appearance18' => 'int',
        'mainHandEnchant' => 'int',
        'offHandEnchant' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'guid',
        'setindex',
        'name',
        'iconname',
        'ignore_mask',
        'appearance0',
        'appearance1',
        'appearance2',
        'appearance3',
        'appearance4',
        'appearance5',
        'appearance6',
        'appearance7',
        'appearance8',
        'appearance9',
        'appearance10',
        'appearance11',
        'appearance12',
        'appearance13',
        'appearance14',
        'appearance15',
        'appearance16',
        'appearance17',
        'appearance18',
        'mainHandEnchant',
        'offHandEnchant'
    ];
}
