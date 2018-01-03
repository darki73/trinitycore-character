<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildRank
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guildid
 * @property int $rid
 * @property string $rname
 * @property int $rights
 * @property int $BankMoneyPerDay
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildRank whereBankMoneyPerDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildRank whereGuildid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildRank whereRid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildRank whereRights($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildRank whereRname($value)
 * @mixin \Eloquent
 */
class GuildRank extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_rank';
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
        'rid' => 'int',
        'rights' => 'int',
        'BankMoneyPerDay' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'rname',
        'rights',
        'BankMoneyPerDay'
    ];
}
