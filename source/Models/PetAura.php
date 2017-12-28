<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PetAura
 * @package FreedomCore\TrinityCore\Character\Models
 */
class PetAura extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'pet_aura';
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
        'guid' => 'int',
        'casterGuid' => 'binary',
        'spell' => 'int',
        'effectMask' => 'int',
        'recalculateMask' => 'int',
        'stackCount' => 'int',
        'maxDuration' => 'int',
        'remainTime' => 'int',
        'remainCharges' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'casterGuid',
        'recalculateMask',
        'stackCount',
        'maxDuration',
        'remainTime',
        'remainCharges'
    ];
}
