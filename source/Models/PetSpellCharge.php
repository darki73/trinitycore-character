<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PetSpellCharge
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $categoryId SpellCategory.dbc Identifier
 * @property int $rechargeStart
 * @property int $rechargeEnd
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetSpellCharge whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetSpellCharge whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetSpellCharge whereRechargeEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\PetSpellCharge whereRechargeStart($value)
 * @mixin \Eloquent
 */
class PetSpellCharge extends CharacterBaseModel
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
