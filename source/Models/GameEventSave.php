<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GameEventSave
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $eventEntry
 * @property int $state
 * @property int $next_start
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GameEventSave whereEventEntry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GameEventSave whereNextStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GameEventSave whereState($value)
 * @mixin \Eloquent
 */
class GameEventSave extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'game_event_save';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'eventEntry';
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
        'eventEntry' => 'int',
        'state' => 'int',
        'next_start' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'state',
        'next_start'
    ];
}
