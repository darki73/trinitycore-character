<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PetAuraEffect
 * @package FreedomCore\TrinityCore\Character\Models
 */
class PetAuraEffect extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'pet_aura_effect';
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
        'effectIndex' => 'int',
        'amount' => 'int',
        'baseAmount' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'amount',
        'baseAmount'
    ];
}
