<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Character
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property int $account Account Identifier
 * @property string $name
 * @property int $slot
 * @property int $race
 * @property int $class
 * @property int $gender
 * @property int $level
 * @property int $xp
 * @property int $money
 * @property int $skin
 * @property int $face
 * @property int $hairStyle
 * @property int $hairColor
 * @property int $facialStyle
 * @property int $customDisplay1
 * @property int $customDisplay2
 * @property int $customDisplay3
 * @property int $bankSlots
 * @property int $restState
 * @property int $playerFlags
 * @property int $playerFlagsEx
 * @property float $position_x
 * @property float $position_y
 * @property float $position_z
 * @property int $map Map Identifier
 * @property int $instance_id
 * @property int $dungeonDifficulty
 * @property int $raidDifficulty
 * @property int $legacyRaidDifficulty
 * @property float $orientation
 * @property string $taximask
 * @property int $online
 * @property int $cinematic
 * @property int $totaltime
 * @property int $leveltime
 * @property int $logout_time
 * @property int $is_logout_resting
 * @property float $rest_bonus
 * @property int $resettalents_cost
 * @property int $resettalents_time
 * @property int $primarySpecialization
 * @property float $trans_x
 * @property float $trans_y
 * @property float $trans_z
 * @property float $trans_o
 * @property int $transguid
 * @property int $extra_flags
 * @property int $stable_slots
 * @property int $at_login
 * @property int $zone
 * @property int $death_expire_time
 * @property string|null $taxi_path
 * @property int $totalKills
 * @property int $todayKills
 * @property int $yesterdayKills
 * @property int $chosenTitle
 * @property int $watchedFaction
 * @property int $drunk
 * @property int $health
 * @property int $power1
 * @property int $power2
 * @property int $power3
 * @property int $power4
 * @property int $power5
 * @property int $power6
 * @property int $latency
 * @property int $activeTalentGroup
 * @property int $lootSpecId
 * @property string|null $exploredZones
 * @property string|null $equipmentCache
 * @property string|null $knownTitles
 * @property int $actionBars
 * @property int $grantableLevels
 * @property int $deleteInfos_Account
 * @property string|null $deleteInfos_Name
 * @property int $deleteDate
 * @property int $honor
 * @property int $honorLevel
 * @property int $prestigeLevel
 * @property int $honorRestState
 * @property float $honorRestBonus
 * @property-read \Illuminate\Database\Eloquent\Collection|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower[] $garrisonFollowers
 * @property-read mixed $guild
 * @property-read array $player_versus_player_stats
 * @property-read array $position
 * @property-read \FreedomCore\TrinityCore\Character\Models\GuildMember $guildMember
 * @property-read \Illuminate\Database\Eloquent\Collection|\FreedomCore\TrinityCore\Character\Models\CharacterInventory[] $inventory
 * @property-read \Illuminate\Database\Eloquent\Collection|\FreedomCore\TrinityCore\Character\Models\CharacterSkill[] $skills
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereActionBars($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereActiveTalentGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereAtLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereBankSlots($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereChosenTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereCinematic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereCustomDisplay1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereCustomDisplay2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereCustomDisplay3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereDeathExpireTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereDeleteDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereDeleteInfosAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereDeleteInfosName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereDrunk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereDungeonDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereEquipmentCache($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereExploredZones($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereExtraFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereFace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereFacialStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereGrantableLevels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereHairColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereHairStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereHonor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereHonorLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereHonorRestBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereHonorRestState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereIsLogoutResting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereKnownTitles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereLatency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereLegacyRaidDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereLeveltime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereLogoutTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereLootSpecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereOrientation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePlayerFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePlayerFlagsEx($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePositionX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePositionY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePositionZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePower1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePower2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePower3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePower4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePower5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePower6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePrestigeLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character wherePrimarySpecialization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereRace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereRaidDifficulty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereResettalentsCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereResettalentsTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereRestBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereRestState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereSkin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereStableSlots($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTaxiPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTaximask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTodayKills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTotalKills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTotaltime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTransO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTransX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTransY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTransZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereTransguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereWatchedFaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereXp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereYesterdayKills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Character whereZone($value)
 * @mixin \Eloquent
 */
class Character extends CharacterBaseModel
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
        'account' => 'int',
        'slot' => 'int',
        'race' => 'int',
        'class' => 'int',
        'gender' => 'int',
        'level' => 'int',
        'xp' => 'int',
        'money' => 'int',
        'skin' => 'int',
        'face' => 'int',
        'hairStyle' => 'int',
        'hairColor' => 'int',
        'facialStyle' => 'int',
        'customDisplay1' => 'int',
        'customDisplay2' => 'int',
        'customDisplay3' => 'int',
        'bankSlots' => 'int',
        'restState' => 'int',
        'playerFlags' => 'int',
        'playerFlagsEx' => 'int',
        'position_x' => 'float',
        'position_y' => 'float',
        'position_z' => 'float',
        'map' => 'int',
        'instance_id' => 'int',
        'dungeonDifficulty' => 'int',
        'raidDifficulty' => 'int',
        'legacyRaidDifficulty' => 'int',
        'orientation' => 'float',
        'online' => 'int',
        'cinematic' => 'int',
        'totaltime' => 'int',
        'leveltime' => 'int',
        'logout_time' => 'int',
        'is_logout_resting' => 'int',
        'rest_bonus' => 'float',
        'resettalents_cost' => 'int',
        'resettalents_time' => 'int',
        'primarySpecialization' => 'int',
        'trans_x' => 'float',
        'trans_y' => 'float',
        'trans_z' => 'float',
        'trans_o' => 'float',
        'transguid' => 'int',
        'extra_flags' => 'int',
        'stable_slots' => 'int',
        'at_login' => 'int',
        'zone' => 'int',
        'death_expire_time' => 'int',
        'totalKills' => 'int',
        'todayKills' => 'int',
        'yesterdayKills' => 'int',
        'chosenTitle' => 'int',
        'watchedFaction' => 'int',
        'drunk' => 'int',
        'health' => 'int',
        'power1' => 'int',
        'power2' => 'int',
        'power3' => 'int',
        'power4' => 'int',
        'power5' => 'int',
        'power6' => 'int',
        'latency' => 'int',
        'activeTalentGroup' => 'int',
        'lootSpecId' => 'int',
        'actionBars' => 'int',
        'grantableLevels' => 'int',
        'deleteInfos_Account' => 'int',
        'deleteDate' => 'int',
        'honor' => 'int',
        'honorLevel' => 'int',
        'prestigeLevel' => 'int',
        'honorRestState' => 'int',
        'honorRestBonus' => 'float'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'account',
        'name',
        'slot',
        'race',
        'class',
        'gender',
        'level',
        'xp',
        'money',
        'skin',
        'face',
        'hairStyle',
        'hairColor',
        'facialStyle',
        'customDisplay1',
        'customDisplay2',
        'customDisplay3',
        'bankSlots',
        'restState',
        'playerFlags',
        'playerFlagsEx',
        'position_x',
        'position_y',
        'position_z',
        'map',
        'instance_id',
        'dungeonDifficulty',
        'raidDifficulty',
        'legacyRaidDifficulty',
        'orientation',
        'taximask',
        'online',
        'cinematic',
        'totaltime',
        'leveltime',
        'logout_time',
        'is_logout_resting',
        'rest_bonus',
        'resettalents_cost',
        'resettalents_time',
        'primarySpecialization',
        'trans_x',
        'trans_y',
        'trans_z',
        'trans_o',
        'transguid',
        'extra_flags',
        'stable_slots',
        'at_login',
        'zone',
        'death_expire_time',
        'taxi_path',
        'totalKills',
        'todayKills',
        'yesterdayKills',
        'chosenTitle',
        'watchedFaction',
        'drunk',
        'health',
        'power1',
        'power2',
        'power3',
        'power4',
        'power5',
        'power6',
        'latency',
        'activeTalentGroup',
        'lootSpecId',
        'exploredZones',
        'equipmentCache',
        'knownTitles',
        'actionBars',
        'grantableLevels',
        'deleteInfos_Account',
        'deleteInfos_Name',
        'deleteDate',
        'honor',
        'honorLevel',
        'prestigeLevel',
        'honorRestState',
        'honorRestBonus'
    ];

    /**
     * Characters Garrison Followers
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function garrisonFollowers()
    {
        return $this->hasMany(CharacterGarrisonFollower::class, 'guid');
    }

    /**
     * Character is a guild member of which guild
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guildMember()
    {
        return $this->belongsTo(GuildMember::class, 'guid');
    }

    /**
     * Get guild to which character belongs to
     * @usage $character->guild
     * @return mixed
     */
    public function getGuildAttribute()
    {
        return $this->guildMember->guild;
    }

    /**
     * Get character position
     * @return array
     */
    public function getPositionAttribute() : array
    {
        return [
            'zone'  =>  $this->zone,
            'x'     =>  $this->trans_x,
            'y'     =>  $this->trans_y,
            'z'     =>  $this->trans_z,
            'o'     =>  $this->trans_o,
        ];
    }

    /**
     * Get PvP Stats for the character
     * @return array
     */
    public function getPlayerVersusPlayerStatsAttribute() : array
    {
        return [
            'honor'     =>  [
                'amount'        =>  $this->honor,
                'level'         =>  $this->honorLevel,
                'rest_state'    =>  $this->honorRestState,
                'rest_bonus'    =>  $this->honorRestBonus
            ],
            'prestige'  =>  [
                'level'         =>  $this->prestigeLevel
            ],
            'kills'     =>  [
                'total'         =>  $this->totalKills,
                'today'         =>  $this->todayKills,
            ]
        ];
    }

    /**
     * Get Inventory of a Character
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventory()
    {
        return $this->hasMany(CharacterInventory::class, 'guid');
    }

    /**
     * Get character skills
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skills()
    {
        return $this->hasMany(CharacterSkill::class, 'guid');
    }
}
