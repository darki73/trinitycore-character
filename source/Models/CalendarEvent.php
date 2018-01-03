<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CalendarEvent
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $EventID
 * @property int $Owner
 * @property string $Title
 * @property string $Description
 * @property bool $EventType
 * @property int $TextureID
 * @property int $Date
 * @property int $Flags
 * @property int $LockDate
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereEventID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereLockDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereTextureID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CalendarEvent whereTitle($value)
 * @mixin \Eloquent
 */
class CalendarEvent extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'EventID';
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
        'EventID' => 'int',
        'Owner' => 'int',
        'EventType' => 'bool',
        'TextureID' => 'int',
        'Date' => 'int',
        'Flags' => 'int',
        'LockDate' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'Owner',
        'Title',
        'Description',
        'EventType',
        'TextureID',
        'Date',
        'Flags',
        'LockDate'
    ];
}
