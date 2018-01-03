<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterAura
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property mixed $casterGuid Full Global Unique Identifier
 * @property mixed $itemGuid
 * @property int $spell
 * @property int $effectMask
 * @property int $recalculateMask
 * @property int $stackCount
 * @property int $maxDuration
 * @property int $remainTime
 * @property int $remainCharges
 * @property int $castItemLevel
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereCastItemLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereCasterGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereEffectMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereItemGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereMaxDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereRecalculateMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereRemainCharges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereRemainTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereSpell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAura whereStackCount($value)
 * @mixin \Eloquent
 */
class CharacterAura extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_aura';
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
        'casterGuid' => 'binary',
        'itemGuid' => 'binary',
        'spell' => 'int',
        'effectMask' => 'int',
        'recalculateMask' => 'int',
        'stackCount' => 'int',
        'maxDuration' => 'int',
        'remainTime' => 'int',
        'remainCharges' => 'int',
        'castItemLevel' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'recalculateMask',
        'stackCount',
        'maxDuration',
        'remainTime',
        'remainCharges',
        'castItemLevel'
    ];
}
