<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;
use FreedomCore\TrinityCore\Character\Models\Character as CharacterModel;

/**
 * Class CharacterGarrisonFollower
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $dbId
 * @property int $guid
 * @property int $followerId
 * @property int $quality
 * @property int $level
 * @property int $itemLevelWeapon
 * @property int $itemLevelArmor
 * @property int $xp
 * @property int $currentBuilding
 * @property int $currentMission
 * @property int $status
 * @property-read \FreedomCore\TrinityCore\Character\Models\Character $character
 * @property-read \Illuminate\Database\Eloquent\Collection|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollowerAbility[] $followerAbilities
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereCurrentBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereCurrentMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereDbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereFollowerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereItemLevelArmor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereItemLevelWeapon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereQuality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower whereXp($value)
 * @mixin \Eloquent
 */
class CharacterGarrisonFollower extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'dbId';
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
        'dbId' => 'int',
        'guid' => 'int',
        'followerId' => 'int',
        'quality' => 'int',
        'level' => 'int',
        'itemLevelWeapon' => 'int',
        'itemLevelArmor' => 'int',
        'xp' => 'int',
        'currentBuilding' => 'int',
        'currentMission' => 'int',
        'status' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'guid',
        'followerId',
        'quality',
        'level',
        'itemLevelWeapon',
        'itemLevelArmor',
        'xp',
        'currentBuilding',
        'currentMission',
        'status'
    ];

    /**
     * Get character to whom this follower belongs
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {
        return $this->belongsTo(CharacterModel::class, 'guid');
    }

    /**
     * Get abilities of selected follower
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function followerAbilities()
    {
        return $this->hasMany(CharacterGarrisonFollowerAbility::class, 'dbId');
    }
}
