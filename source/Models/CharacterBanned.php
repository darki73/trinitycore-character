<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterBanned
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property int $bandate
 * @property int $unbandate
 * @property string $bannedby
 * @property string $banreason
 * @property int $active
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBanned whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBanned whereBandate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBanned whereBannedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBanned whereBanreason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBanned whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBanned whereUnbandate($value)
 * @mixin \Eloquent
 */
class CharacterBanned extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_banned';
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
        'guid' => 'int',
        'bandate' => 'int',
        'unbandate' => 'int',
        'active' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'unbandate',
        'bannedby',
        'banreason',
        'active'
    ];
}
