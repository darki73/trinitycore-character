<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Character
 * @package FreedomCore\TrinityCore\Character\Models
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
}
