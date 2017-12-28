<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ArenaTeam
 * @package FreedomCore\TrinityCore\Character\Models
 */
class ArenaTeam extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'arena_team';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'arenaTeamId';
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
        'arenaTeamId' => 'int',
        'captainGuid' => 'int',
        'type' => 'int',
        'rating' => 'int',
        'seasonGames' => 'int',
        'seasonWins' => 'int',
        'weekGames' => 'int',
        'weekWins' => 'int',
        'rank' => 'int',
        'backgroundColor' => 'int',
        'emblemStyle' => 'int',
        'emblemColor' => 'int',
        'borderStyle' => 'int',
        'borderColor' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'name',
        'captainGuid',
        'type',
        'rating',
        'seasonGames',
        'seasonWins',
        'weekGames',
        'weekWins',
        'rank',
        'backgroundColor',
        'emblemStyle',
        'emblemColor',
        'borderStyle',
        'borderColor'
    ];
}
