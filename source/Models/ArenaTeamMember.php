<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ArenaTeamMember
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $arenaTeamId
 * @property int $guid
 * @property int $weekGames
 * @property int $weekWins
 * @property int $seasonGames
 * @property int $seasonWins
 * @property int $personalRating
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeamMember whereArenaTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeamMember whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeamMember wherePersonalRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeamMember whereSeasonGames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeamMember whereSeasonWins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeamMember whereWeekGames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeamMember whereWeekWins($value)
 * @mixin \Eloquent
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
