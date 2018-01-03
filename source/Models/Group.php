<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Group
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $leaderGuid
 * @property int $lootMethod
 * @property int $looterGuid
 * @property int $lootThreshold
 * @property mixed $icon1
 * @property mixed $icon2
 * @property mixed $icon3
 * @property mixed $icon4
 * @property mixed $icon5
 * @property mixed $icon6
 * @property mixed $icon7
 * @property mixed $icon8
 * @property int $groupType
 * @property int $difficulty
 * @property int $raidDifficulty
 * @property int $legacyRaidDifficulty
 * @property int $masterLooterGuid
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereGroupType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereIcon8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereLeaderGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereLegacyRaidDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereLootMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereLootThreshold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereLooterGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereMasterLooterGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Group whereRaidDifficulty($value)
 * @mixin \Eloquent
 */
class Group extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guid';
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
        'leaderGuid' => 'int',
        'lootMethod' => 'int',
        'looterGuid' => 'int',
        'lootThreshold' => 'int',
        'icon1' => 'binary',
        'icon2' => 'binary',
        'icon3' => 'binary',
        'icon4' => 'binary',
        'icon5' => 'binary',
        'icon6' => 'binary',
        'icon7' => 'binary',
        'icon8' => 'binary',
        'groupType' => 'int',
        'difficulty' => 'int',
        'raidDifficulty' => 'int',
        'legacyRaidDifficulty' => 'int',
        'masterLooterGuid' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'leaderGuid',
        'lootMethod',
        'looterGuid',
        'lootThreshold',
        'icon1',
        'icon2',
        'icon3',
        'icon4',
        'icon5',
        'icon6',
        'icon7',
        'icon8',
        'groupType',
        'difficulty',
        'raidDifficulty',
        'legacyRaidDifficulty',
        'masterLooterGuid'
    ];
}
