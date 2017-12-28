<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Instance
 * @package FreedomCore\TrinityCore\Character\Models
 */
class Instance extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'instance';
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
        'id' => 'int',
        'map' => 'int',
        'resettime' => 'int',
        'difficulty' => 'int',
        'completedEncounters' => 'int',
        'entranceId' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'map',
        'resettime',
        'difficulty',
        'completedEncounters',
        'data',
        'entranceId'
    ];
}
