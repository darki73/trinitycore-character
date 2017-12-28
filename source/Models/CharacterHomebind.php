<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterHomebind
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterHomebind extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_homebind';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'true';
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
        'mapId' => 'int',
        'zoneId' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'mapId',
        'zoneId',
        'posX',
        'posY',
        'posZ'
    ];
}
