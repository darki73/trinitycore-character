<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildEventlog
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guildid Guild Identificator
 * @property int $LogGuid Log record identificator - auxiliary column
 * @property int $EventType Event type
 * @property int $PlayerGuid1 Player 1
 * @property int $PlayerGuid2 Player 2
 * @property int $NewRank New rank(in case promotion/demotion)
 * @property int $TimeStamp Event UNIX time
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildEventlog whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildEventlog whereGuildid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildEventlog whereLogGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildEventlog whereNewRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildEventlog wherePlayerGuid1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildEventlog wherePlayerGuid2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildEventlog whereTimeStamp($value)
 * @mixin \Eloquent
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
