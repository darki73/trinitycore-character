<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterGift
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $item_guid
 * @property int $entry
 * @property int $flags
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGift whereEntry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGift whereFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGift whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGift whereItemGuid($value)
 * @mixin \Eloquent
 */
class CharacterGift extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'item_guid';
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
        'item_guid' => 'int',
        'entry' => 'int',
        'flags' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'guid',
        'entry',
        'flags'
    ];
}
