<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterQuestStatusObjectivesCriteria
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $questObjectiveId
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusObjectivesCriteria whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusObjectivesCriteria whereQuestObjectiveId($value)
 * @mixin \Eloquent
 */
class CharacterQuestStatusObjectivesCriteria extends CharacterBaseModel
{

    /**
     * @inheritdoc
     * @var string
     */
    protected $table = 'character_queststatus_objectives_criteria';
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
        'questObjectiveId' => 'int'
    ];
}
