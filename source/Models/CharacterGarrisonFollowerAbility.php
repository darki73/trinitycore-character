<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterGarrisonFollowerAbility
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $dbId
 * @property int $abilityId
 * @property int $slot
 * @property-read \FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollower $garrisonFollower
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollowerAbility whereAbilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollowerAbility whereDbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonFollowerAbility whereSlot($value)
 * @mixin \Eloquent
 */
class CharacterGarrisonFollowerAbility extends CharacterBaseModel
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
        'dbId' => 'int',
        'abilityId' => 'int',
        'slot' => 'int'
    ];

    /**
     * Get garrison follower to whom this
     * ability belongs to
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function garrisonFollower()
    {
        return $this->belongsTo(CharacterGarrisonFollower::class, 'dbId');
    }
}
