<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class AccountData
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $accountId Account Identifier
 * @property int $type
 * @property int $time
 * @property bool $data
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountData whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountData whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountData whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountData whereType($value)
 * @mixin \Eloquent
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
