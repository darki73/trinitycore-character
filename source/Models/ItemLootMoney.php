<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemLootMoney
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $container_id guid of container (item_instance.guid)
 * @property int $money money loot (in copper)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootMoney whereContainerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemLootMoney whereMoney($value)
 * @mixin \Eloquent
 */
class ItemLootMoney extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'item_loot_money';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'container_id';
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
        'money' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'money'
    ];
}
