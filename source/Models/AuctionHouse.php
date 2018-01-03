<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class AuctionHouse
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $id
 * @property int $auctioneerguid
 * @property int $itemguid
 * @property int $itemowner
 * @property int $buyoutprice
 * @property int $time
 * @property int $buyguid
 * @property int $lastbid
 * @property int $startbid
 * @property int $deposit
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereAuctioneerguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereBuyguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereBuyoutprice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereItemguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereItemowner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereLastbid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereStartbid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AuctionHouse whereTime($value)
 * @mixin \Eloquent
 */
class AuctionHouse extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'auctionhouse';
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
        'id' => 'int',
        'auctioneerguid' => 'int',
        'itemguid' => 'int',
        'itemowner' => 'int',
        'buyoutprice' => 'int',
        'time' => 'int',
        'buyguid' => 'int',
        'lastbid' => 'int',
        'startbid' => 'int',
        'deposit' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'auctioneerguid',
        'itemguid',
        'itemowner',
        'buyoutprice',
        'time',
        'buyguid',
        'lastbid',
        'startbid',
        'deposit'
    ];
}
