<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildNewslog
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GuildNewslog extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_newslog';
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
        'guildid' => 'int',
        'LogGuid' => 'int',
        'EventType' => 'int',
        'PlayerGuid' => 'int',
        'Flags' => 'int',
        'Value' => 'int',
        'TimeStamp' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'EventType',
        'PlayerGuid',
        'Flags',
        'Value',
        'TimeStamp'
    ];
}
