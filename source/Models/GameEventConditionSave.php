<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GameEventConditionSave
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $eventEntry
 * @property int $condition_id
 * @property float $done
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GameEventConditionSave whereConditionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GameEventConditionSave whereDone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GameEventConditionSave whereEventEntry($value)
 * @mixin \Eloquent
 */
class GameEventConditionSave extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'game_event_condition_save';
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
        'condition_id' => 'int',
        'done' => 'float'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'done'
    ];
}
