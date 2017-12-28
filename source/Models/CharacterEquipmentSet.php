<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterEquipmentSet
 * @package FreedomCore\TrinityCore\Character\Models
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
