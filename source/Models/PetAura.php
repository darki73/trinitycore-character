<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PetAura
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property mixed $casterGuid Full Global Unique Identifier
 * @property int $spell
 * @property int $effectMask
 * @property int $recalculateMask
 * @property int $stackCount
 * @property int $maxDuration
 * @property int $remainTime
 * @property int $remainCharges
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereCasterGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereEffectMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereMaxDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereRecalculateMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereRemainCharges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereRemainTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereSpell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetAura whereStackCount($value)
 * @mixin \Eloquent
 */
class PetAura extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'pet_aura';
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
        'guid' => 'int',
        'casterGuid' => 'binary',
        'spell' => 'int',
        'effectMask' => 'int',
        'recalculateMask' => 'int',
        'stackCount' => 'int',
        'maxDuration' => 'int',
        'remainTime' => 'int',
        'remainCharges' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'casterGuid',
        'recalculateMask',
        'stackCount',
        'maxDuration',
        'remainTime',
        'remainCharges'
    ];
}
