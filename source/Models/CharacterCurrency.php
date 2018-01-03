<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterCurrency
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $CharacterGuid
 * @property int $Currency
 * @property int $Quantity
 * @property int $WeeklyQuantity
 * @property int $TrackedQuantity
 * @property int $Flags
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCurrency whereCharacterGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCurrency whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCurrency whereFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCurrency whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCurrency whereTrackedQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCurrency whereWeeklyQuantity($value)
 * @mixin \Eloquent
 */
class CharacterCurrency extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_currency';
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
        'CharacterGuid' => 'int',
        'Currency' => 'int',
        'Quantity' => 'int',
        'WeeklyQuantity' => 'int',
        'TrackedQuantity' => 'int',
        'Flags' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'Quantity',
        'WeeklyQuantity',
        'TrackedQuantity',
        'Flags'
    ];
}
