<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterAccountData
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @mixin \Eloquent
 */
class CharacterAccountData extends CharacterBaseModel
{

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
        'type' => 'int',
        'time' => 'int',
        'data' => 'boolean'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'time',
        'data'
    ];
}
