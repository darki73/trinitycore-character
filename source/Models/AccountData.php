<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class AccountData
 * @package FreedomCore\TrinityCore\Character\Models
 */
class AccountData extends CharacterBaseModel
{

    /**
     * @inheritdoc
     * @var string
     */
    protected $table = 'account_data';
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
        'accountId' => 'int',
        'type' => 'int',
        'time' => 'int',
        'data' => 'boolean'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'time',
        'data'
    ];
}
