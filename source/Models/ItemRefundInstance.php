<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemRefundInstance
 * @package FreedomCore\TrinityCore\Character\Models
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
