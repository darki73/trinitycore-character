<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Update
 * @package FreedomCore\TrinityCore\Character\Models
 */
class Update extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'name';
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
        'speed' => 'int'
    ];
    /**
    * @inheritdoc
    * @var string
    */
    protected $dates = [
        'timestamp'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'hash',
        'state',
        'timestamp',
        'speed'
    ];
}
