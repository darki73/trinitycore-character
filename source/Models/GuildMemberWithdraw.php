<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildMemberWithdraw
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $tab0
 * @property int $tab1
 * @property int $tab2
 * @property int $tab3
 * @property int $tab4
 * @property int $tab5
 * @property int $tab6
 * @property int $tab7
 * @property int $money
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildMemberWithdraw whereTab7($value)
 * @mixin \Eloquent
 */
class GuildMemberWithdraw extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_member_withdraw';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guid';
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
        'tab0' => 'int',
        'tab1' => 'int',
        'tab2' => 'int',
        'tab3' => 'int',
        'tab4' => 'int',
        'tab5' => 'int',
        'tab6' => 'int',
        'tab7' => 'int',
        'money' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'tab0',
        'tab1',
        'tab2',
        'tab3',
        'tab4',
        'tab5',
        'tab6',
        'tab7',
        'money'
    ];
}
