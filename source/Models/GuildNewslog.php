<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildNewslog
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guildid Guild Identificator
 * @property int $LogGuid Log record identificator - auxiliary column
 * @property int $EventType Event type
 * @property int $PlayerGuid
 * @property int $Flags
 * @property int $Value
 * @property int $TimeStamp Event UNIX time
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildNewslog whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildNewslog whereFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildNewslog whereGuildid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildNewslog whereLogGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildNewslog wherePlayerGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildNewslog whereTimeStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildNewslog whereValue($value)
 * @mixin \Eloquent
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
