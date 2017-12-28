<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ArenaTeamMember
 * @package FreedomCore\TrinityCore\Character\Models
 */
class ArenaTeamMember extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'arena_team_member';
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
        'guid' => 'int',
        'weekGames' => 'int',
        'weekWins' => 'int',
        'seasonGames' => 'int',
        'seasonWins' => 'int',
        'personalRating' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'weekGames',
        'weekWins',
        'seasonGames',
        'seasonWins',
        'personalRating'
    ];
}
