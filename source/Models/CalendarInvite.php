<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CalendarInvite
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $InviteID
 * @property int $EventID
 * @property int $Invitee
 * @property int $Sender
 * @property bool $Status
 * @property int $ResponseTime
 * @property bool $ModerationRank
 * @property string $Note
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereEventID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereInviteID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereInvitee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereModerationRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereResponseTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarInvite whereStatus($value)
 * @mixin \Eloquent
 */
class CalendarInvite extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'InviteID';
    /**
    * @inheritdoc
    * @var bool
    */
    public $incrementing = true;
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
        'InviteID' => 'int',
        'EventID' => 'int',
        'Invitee' => 'int',
        'Sender' => 'int',
        'Status' => 'bool',
        'ResponseTime' => 'int',
        'ModerationRank' => 'bool'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'EventID',
        'Invitee',
        'Sender',
        'Status',
        'ResponseTime',
        'ModerationRank',
        'Note'
    ];
}
