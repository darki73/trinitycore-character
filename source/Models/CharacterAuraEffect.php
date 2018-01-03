<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterAuraEffect
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property mixed $casterGuid Full Global Unique Identifier
 * @property mixed $itemGuid
 * @property int $spell
 * @property int $effectMask
 * @property int $effectIndex
 * @property int $amount
 * @property int $baseAmount
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereBaseAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereCasterGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereEffectIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereEffectMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereItemGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterAuraEffect whereSpell($value)
 * @mixin \Eloquent
 */
class CharacterAuraEffect extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_aura_effect';
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
        'effectIndex' => 'int',
        'amount' => 'int',
        'baseAmount' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'amount',
        'baseAmount'
    ];
}
