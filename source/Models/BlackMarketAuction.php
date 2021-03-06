<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class BlackmarketAuction
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @mixin \Eloquent
 */
class BlackMarketAuction extends CharacterBaseModel
{

    /**
     * @inheritdoc
     * @var string
     */
    protected $table = 'blackmarket_auction';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'marketId';
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
        'marketId' => 'int',
        'currentBid' => 'int',
        'time' => 'int',
        'numBids' => 'int',
        'bidder' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'currentBid',
        'time',
        'numBids',
        'bidder'
    ];
}
