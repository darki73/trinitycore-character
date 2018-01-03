<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterSpellCharge
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier, Low part
 * @property int $categoryId SpellCategory.dbc Identifier
 * @property int $rechargeStart
 * @property int $rechargeEnd
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterSpellCharge whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterSpellCharge whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterSpellCharge whereRechargeEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterSpellCharge whereRechargeStart($value)
 * @mixin \Eloquent
 */
class CharacterSpellCharge extends CharacterBaseModel
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
        'categoryId' => 'int',
        'rechargeStart' => 'int',
        'rechargeEnd' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'categoryId',
        'rechargeStart',
        'rechargeEnd'
    ];
}
