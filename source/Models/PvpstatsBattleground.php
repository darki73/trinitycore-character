<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PvpstatsBattleground
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $id
 * @property int $winner_faction
 * @property int $bracket_id
 * @property int $type
 * @property \Carbon\Carbon $date
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PvpstatsBattleground whereBracketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PvpstatsBattleground whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PvpstatsBattleground whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PvpstatsBattleground whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PvpstatsBattleground whereWinnerFaction($value)
 * @mixin \Eloquent
 */
class PvpstatsBattleground extends CharacterBaseModel
{

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
        'winner_faction' => 'int',
        'bracket_id' => 'int',
        'type' => 'int'
    ];
    /**
    * @inheritdoc
    * @var string
    */
    protected $dates = [
        'date'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'winner_faction',
        'bracket_id',
        'type',
        'date'
    ];
}
