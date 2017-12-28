<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildEventlog
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GuildEventlog extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_eventlog';
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
        'PlayerGuid1' => 'int',
        'PlayerGuid2' => 'int',
        'NewRank' => 'int',
        'TimeStamp' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'EventType',
        'PlayerGuid1',
        'PlayerGuid2',
        'NewRank',
        'TimeStamp'
    ];
}
