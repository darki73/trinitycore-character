<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemLootItem
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $container_id guid of container (item_instance.guid)
 * @property int $item_id loot item entry (item_instance.itemEntry)
 * @property int $item_count stack size
 * @property bool $follow_rules follow loot rules
 * @property bool $ffa free-for-all
 * @property bool $blocked
 * @property bool $counted
 * @property bool $under_threshold
 * @property bool $needs_quest quest drop
 * @property int $rnd_type random enchantment type
 * @property int $rnd_prop random enchantment added when originally rolled
 * @property int $rnd_suffix random suffix added when originally rolled
 * @property int $context
 * @property string|null $bonus_list_ids Space separated list of bonus list ids
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereBlocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereBonusListIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereContainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereContext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereCounted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereFfa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereFollowRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereItemCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereNeedsQuest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereRndProp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereRndSuffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereRndType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootItem whereUnderThreshold($value)
 * @mixin \Eloquent
 */
class ItemLootItem extends CharacterBaseModel
{

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
        'container_id' => 'int',
        'item_id' => 'int',
        'item_count' => 'int',
        'follow_rules' => 'bool',
        'ffa' => 'bool',
        'blocked' => 'bool',
        'counted' => 'bool',
        'under_threshold' => 'bool',
        'needs_quest' => 'bool',
        'rnd_type' => 'int',
        'rnd_prop' => 'int',
        'rnd_suffix' => 'int',
        'context' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'item_count',
        'follow_rules',
        'ffa',
        'blocked',
        'counted',
        'under_threshold',
        'needs_quest',
        'rnd_type',
        'rnd_prop',
        'rnd_suffix',
        'context',
        'bonus_list_ids'
    ];
}
