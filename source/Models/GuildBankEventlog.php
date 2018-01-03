<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildBankEventlog
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guildid Guild Identificator
 * @property int $LogGuid Log record identificator - auxiliary column
 * @property int $TabId Guild bank TabId
 * @property int $EventType Event type
 * @property int $PlayerGuid
 * @property int $ItemOrMoney
 * @property int $ItemStackCount
 * @property int $DestTabId Destination Tab Id
 * @property int $TimeStamp Event UNIX time
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereDestTabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereGuildid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereItemOrMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereItemStackCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereLogGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog wherePlayerGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereTabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildBankEventlog whereTimeStamp($value)
 * @mixin \Eloquent
 */
class GuildBankEventlog extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_bank_eventlog';
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
        'TabId' => 'int',
        'EventType' => 'int',
        'PlayerGuid' => 'int',
        'ItemOrMoney' => 'int',
        'ItemStackCount' => 'int',
        'DestTabId' => 'int',
        'TimeStamp' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'EventType',
        'PlayerGuid',
        'ItemOrMoney',
        'ItemStackCount',
        'DestTabId',
        'TimeStamp'
    ];
}
