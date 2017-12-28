<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterAuraEffect
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterAuraEffect extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_aura_effect';
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
        'casterGuid' => 'binary',
        'itemGuid' => 'binary',
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
