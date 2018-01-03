<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Channel
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property string $name
 * @property int $team
 * @property int $announce
 * @property int $ownership
 * @property string|null $password
 * @property string|null $bannedList
 * @property int $lastUsed
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Channel whereAnnounce($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Channel whereBannedList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Channel whereLastUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Channel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Channel whereOwnership($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Channel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Channel whereTeam($value)
 * @mixin \Eloquent
 */
class Channel extends CharacterBaseModel
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
        'team' => 'int',
        'announce' => 'int',
        'ownership' => 'int',
        'lastUsed' => 'int'
    ];
    /**
    * @inheritdoc
    * @var string
    */
    protected $hidden = [
        'password'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'announce',
        'ownership',
        'password',
        'bannedList',
        'lastUsed'
    ];
}
