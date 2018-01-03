<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterStat
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier, Low part
 * @property int $maxhealth
 * @property int $maxpower1
 * @property int $maxpower2
 * @property int $maxpower3
 * @property int $maxpower4
 * @property int $maxpower5
 * @property int $maxpower6
 * @property int $strength
 * @property int $agility
 * @property int $stamina
 * @property int $intellect
 * @property int $armor
 * @property int $resHoly
 * @property int $resFire
 * @property int $resNature
 * @property int $resFrost
 * @property int $resShadow
 * @property int $resArcane
 * @property float $blockPct
 * @property float $dodgePct
 * @property float $parryPct
 * @property float $critPct
 * @property float $rangedCritPct
 * @property float $spellCritPct
 * @property int $attackPower
 * @property int $rangedAttackPower
 * @property int $spellPower
 * @property int $resilience
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereAgility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereArmor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereAttackPower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereBlockPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereCritPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereDodgePct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereIntellect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereMaxhealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereMaxpower1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereMaxpower2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereMaxpower3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereMaxpower4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereMaxpower5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereMaxpower6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereParryPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereRangedAttackPower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereRangedCritPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereResArcane($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereResFire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereResFrost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereResHoly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereResNature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereResShadow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereResilience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereSpellCritPct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereSpellPower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterStat whereStrength($value)
 * @mixin \Eloquent
 */
class CharacterStat extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guid';
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
        'maxhealth' => 'int',
        'maxpower1' => 'int',
        'maxpower2' => 'int',
        'maxpower3' => 'int',
        'maxpower4' => 'int',
        'maxpower5' => 'int',
        'maxpower6' => 'int',
        'strength' => 'int',
        'agility' => 'int',
        'stamina' => 'int',
        'intellect' => 'int',
        'armor' => 'int',
        'resHoly' => 'int',
        'resFire' => 'int',
        'resNature' => 'int',
        'resFrost' => 'int',
        'resShadow' => 'int',
        'resArcane' => 'int',
        'blockPct' => 'float',
        'dodgePct' => 'float',
        'parryPct' => 'float',
        'critPct' => 'float',
        'rangedCritPct' => 'float',
        'spellCritPct' => 'float',
        'attackPower' => 'int',
        'rangedAttackPower' => 'int',
        'spellPower' => 'int',
        'resilience' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'maxhealth',
        'maxpower1',
        'maxpower2',
        'maxpower3',
        'maxpower4',
        'maxpower5',
        'maxpower6',
        'strength',
        'agility',
        'stamina',
        'intellect',
        'armor',
        'resHoly',
        'resFire',
        'resNature',
        'resFrost',
        'resShadow',
        'resArcane',
        'blockPct',
        'dodgePct',
        'parryPct',
        'critPct',
        'rangedCritPct',
        'spellCritPct',
        'attackPower',
        'rangedAttackPower',
        'spellPower',
        'resilience'
    ];
}
