<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterQuestStatusObjectivesCriteriaProgress
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $criteriaId
 * @property int $counter
 * @property int $date
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusObjectivesCriteriaProgress whereCounter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusObjectivesCriteriaProgress whereCriteriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusObjectivesCriteriaProgress whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusObjectivesCriteriaProgress whereGuid($value)
 * @mixin \Eloquent
 */
class CharacterQuestStatusObjectivesCriteriaProgress extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_queststatus_objectives_criteria_progress';
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
        'guid' => 'int',
        'criteriaId' => 'int',
        'counter' => 'int',
        'date' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'counter',
        'date'
    ];
}
