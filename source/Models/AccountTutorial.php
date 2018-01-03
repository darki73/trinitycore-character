<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class AccountTutorial
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $accountId Account Identifier
 * @property int $tut0
 * @property int $tut1
 * @property int $tut2
 * @property int $tut3
 * @property int $tut4
 * @property int $tut5
 * @property int $tut6
 * @property int $tut7
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\AccountTutorial whereTut7($value)
 * @mixin \Eloquent
 */
class AccountTutorial extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'account_tutorial';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'accountId';
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
        'tut0' => 'int',
        'tut1' => 'int',
        'tut2' => 'int',
        'tut3' => 'int',
        'tut4' => 'int',
        'tut5' => 'int',
        'tut6' => 'int',
        'tut7' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'tut0',
        'tut1',
        'tut2',
        'tut3',
        'tut4',
        'tut5',
        'tut6',
        'tut7'
    ];
}
