<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class AccountInstanceTime
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $accountId
 * @property int $instanceId
 * @property int $releaseTime
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountInstanceTime whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountInstanceTime whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountInstanceTime whereReleaseTime($value)
 * @mixin \Eloquent
 */
class AccountInstanceTime extends CharacterBaseModel
{

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
        'instanceId' => 'int',
        'releaseTime' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'releaseTime'
    ];
}
