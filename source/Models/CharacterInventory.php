<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterInventory
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property int $bag
 * @property int $slot
 * @property int $item Item Global Unique Identifier
 * @property-read \FreedomCore\TrinityCore\Character\Models\ItemInstance $reference
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterInventory whereBag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterInventory whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterInventory whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterInventory whereSlot($value)
 * @mixin \Eloquent
 */
class CharacterInventory extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_inventory';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'item';
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
        'bag' => 'int',
        'slot' => 'int',
        'item' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'guid',
        'bag',
        'slot',
        'item'
    ];

    /**
     * Get reverence for the item
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reference()
    {
        return $this->hasOne(ItemInstance::class, 'guid', 'item');
    }
}
