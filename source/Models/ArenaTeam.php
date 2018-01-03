<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ArenaTeam
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $arenaTeamId
 * @property string $name
 * @property int $captainGuid
 * @property int $type
 * @property int $rating
 * @property int $seasonGames
 * @property int $seasonWins
 * @property int $weekGames
 * @property int $weekWins
 * @property int $rank
 * @property int $backgroundColor
 * @property int $emblemStyle
 * @property int $emblemColor
 * @property int $borderStyle
 * @property int $borderColor
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereArenaTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereBackgroundColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereBorderColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereBorderStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereCaptainGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereEmblemColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereEmblemStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereSeasonGames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereSeasonWins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereWeekGames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ArenaTeam whereWeekWins($value)
 * @mixin \Eloquent
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
