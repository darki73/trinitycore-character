<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstanceTransmog
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $itemGuid
 * @property int $itemModifiedAppearanceAllSpecs
 * @property int $itemModifiedAppearanceSpec1
 * @property int $itemModifiedAppearanceSpec2
 * @property int $itemModifiedAppearanceSpec3
 * @property int $itemModifiedAppearanceSpec4
 * @property int $spellItemEnchantmentAllSpecs
 * @property int $spellItemEnchantmentSpec1
 * @property int $spellItemEnchantmentSpec2
 * @property int $spellItemEnchantmentSpec3
 * @property int $spellItemEnchantmentSpec4
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereItemGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereItemModifiedAppearanceAllSpecs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereItemModifiedAppearanceSpec1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereItemModifiedAppearanceSpec2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereItemModifiedAppearanceSpec3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereItemModifiedAppearanceSpec4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereSpellItemEnchantmentAllSpecs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereSpellItemEnchantmentSpec1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereSpellItemEnchantmentSpec2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereSpellItemEnchantmentSpec3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceTransmog whereSpellItemEnchantmentSpec4($value)
 * @mixin \Eloquent
 */
class ItemInstanceTransmog extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'item_instance_transmog';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'itemGuid';
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
        'itemGuid' => 'int',
        'itemModifiedAppearanceAllSpecs' => 'int',
        'itemModifiedAppearanceSpec1' => 'int',
        'itemModifiedAppearanceSpec2' => 'int',
        'itemModifiedAppearanceSpec3' => 'int',
        'itemModifiedAppearanceSpec4' => 'int',
        'spellItemEnchantmentAllSpecs' => 'int',
        'spellItemEnchantmentSpec1' => 'int',
        'spellItemEnchantmentSpec2' => 'int',
        'spellItemEnchantmentSpec3' => 'int',
        'spellItemEnchantmentSpec4' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'itemModifiedAppearanceAllSpecs',
        'itemModifiedAppearanceSpec1',
        'itemModifiedAppearanceSpec2',
        'itemModifiedAppearanceSpec3',
        'itemModifiedAppearanceSpec4',
        'spellItemEnchantmentAllSpecs',
        'spellItemEnchantmentSpec1',
        'spellItemEnchantmentSpec2',
        'spellItemEnchantmentSpec3',
        'spellItemEnchantmentSpec4'
    ];
}
