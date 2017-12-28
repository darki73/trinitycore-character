<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildAchievementProgress
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GuildAchievementProgress extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_achievement_progress';
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
        'guildId' => 'int',
        'criteria' => 'int',
        'counter' => 'int',
        'date' => 'int',
        'completedGuid' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'counter',
        'date',
        'completedGuid'
    ];
}
