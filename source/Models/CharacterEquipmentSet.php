<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterEquipmentSet
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $setguid
 * @property int $setindex
 * @property string $name
 * @property string $iconname
 * @property int $ignore_mask
 * @property int $AssignedSpecIndex
 * @property int $item0
 * @property int $item1
 * @property int $item2
 * @property int $item3
 * @property int $item4
 * @property int $item5
 * @property int $item6
 * @property int $item7
 * @property int $item8
 * @property int $item9
 * @property int $item10
 * @property int $item11
 * @property int $item12
 * @property int $item13
 * @property int $item14
 * @property int $item15
 * @property int $item16
 * @property int $item17
 * @property int $item18
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereAssignedSpecIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereIconname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereIgnoreMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem11($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem12($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem13($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem14($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem15($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem16($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem17($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem18($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereItem9($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereSetguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterEquipmentSet whereSetindex($value)
 * @mixin \Eloquent
 */
class CharacterEquipmentSet extends CharacterBaseModel
{

    /**
     * @inheritdoc
     * @var string
     */
    protected $table = 'character_equipmentsets';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'setguid';
    /**
    * @inheritdoc
    * @var bool
    */
    public $timestamps = true;
    /**
    * @inheritdoc
    * @var array
    */
    protected $casts = [
        'guid' => 'int',
        'setindex' => 'int',
        'ignore_mask' => 'int',
        'AssignedSpecIndex' => 'int',
        'item0' => 'int',
        'item1' => 'int',
        'item2' => 'int',
        'item3' => 'int',
        'item4' => 'int',
        'item5' => 'int',
        'item6' => 'int',
        'item7' => 'int',
        'item8' => 'int',
        'item9' => 'int',
        'item10' => 'int',
        'item11' => 'int',
        'item12' => 'int',
        'item13' => 'int',
        'item14' => 'int',
        'item15' => 'int',
        'item16' => 'int',
        'item17' => 'int',
        'item18' => 'int'
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
        'AssignedSpecIndex',
        'item0',
        'item1',
        'item2',
        'item3',
        'item4',
        'item5',
        'item6',
        'item7',
        'item8',
        'item9',
        'item10',
        'item11',
        'item12',
        'item13',
        'item14',
        'item15',
        'item16',
        'item17',
        'item18'
    ];
}
