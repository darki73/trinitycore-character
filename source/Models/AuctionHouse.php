<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class AuctionHouse
 * @package FreedomCore\TrinityCore\Character\Models
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
