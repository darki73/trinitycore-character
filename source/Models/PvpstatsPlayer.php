<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PvpstatsPlayer
 * @package FreedomCore\TrinityCore\Character\Models
 */
class PvpstatsPlayer extends CharacterBaseModel
{

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
        'battleground_id' => 'int',
        'character_guid' => 'int',
        'winner' => 'bool',
        'score_killing_blows' => 'int',
        'score_deaths' => 'int',
        'score_honorable_kills' => 'int',
        'score_bonus_honor' => 'int',
        'score_damage_done' => 'int',
        'score_healing_done' => 'int',
        'attr_1' => 'int',
        'attr_2' => 'int',
        'attr_3' => 'int',
        'attr_4' => 'int',
        'attr_5' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'winner',
        'score_killing_blows',
        'score_deaths',
        'score_honorable_kills',
        'score_bonus_honor',
        'score_damage_done',
        'score_healing_done',
        'attr_1',
        'attr_2',
        'attr_3',
        'attr_4',
        'attr_5'
    ];
}
