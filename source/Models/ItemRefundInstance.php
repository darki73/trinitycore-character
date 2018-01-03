<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemRefundInstance
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $item_guid Item GUID
 * @property int $player_guid Player GUID
 * @property int $paidMoney
 * @property int $paidExtendedCost
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemRefundInstance whereItemGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemRefundInstance wherePaidExtendedCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemRefundInstance wherePaidMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemRefundInstance wherePlayerGuid($value)
 * @mixin \Eloquent
 */
class ItemRefundInstance extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'item_refund_instance';
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
        'item_guid' => 'int',
        'player_guid' => 'int',
        'paidMoney' => 'int',
        'paidExtendedCost' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'paidMoney',
        'paidExtendedCost'
    ];
}
