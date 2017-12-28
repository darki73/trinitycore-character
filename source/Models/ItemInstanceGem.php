<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstanceGem
 * @package FreedomCore\TrinityCore\Character\Models
 */
class ItemInstanceGem extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'itemGuid';
    /**
    * @inheritdoc
    * @var bool
    */
    public $incrementing = false;
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
        'itemGuid' => 'int',
        'gemItemId1' => 'int',
        'gemContext1' => 'int',
        'gemScalingLevel1' => 'int',
        'gemItemId2' => 'int',
        'gemContext2' => 'int',
        'gemScalingLevel2' => 'int',
        'gemItemId3' => 'int',
        'gemContext3' => 'int',
        'gemScalingLevel3' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'gemItemId1',
        'gemBonuses1',
        'gemContext1',
        'gemScalingLevel1',
        'gemItemId2',
        'gemBonuses2',
        'gemContext2',
        'gemScalingLevel2',
        'gemItemId3',
        'gemBonuses3',
        'gemContext3',
        'gemScalingLevel3'
    ];
}
