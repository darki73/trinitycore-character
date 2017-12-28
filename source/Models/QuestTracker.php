<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class QuestTracker
 * @package FreedomCore\TrinityCore\Character\Models
 */
class QuestTracker extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'quest_tracker';
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
        'id' => 'int',
        'character_guid' => 'int',
        'completed_by_gm' => 'bool'
    ];
    /**
    * @inheritdoc
    * @var string
    */
    protected $dates = [
        'quest_accept_time',
        'quest_complete_time',
        'quest_abandon_time'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'quest_accept_time',
        'quest_complete_time',
        'quest_abandon_time',
        'completed_by_gm',
        'core_hash',
        'core_revision'
    ];
}
