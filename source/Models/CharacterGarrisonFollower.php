<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;
use FreedomCore\TrinityCore\Character\Models\Character as CharacterModel;

/**
 * Class CharacterGarrisonFollower
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterGarrisonFollower extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'dbId';
	/**
	* @inheritdoc
	* @var bool
	*/
	public $incrementing = false;
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
	public function character() {
		return $this->belongsTo(CharacterModel::class, 'guid');
	}

    /**
     * Get abilities of selected follower
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function followerAbilities() {
		return $this->hasMany(CharacterGarrisonFollowerAbility::class, 'dbId');
	}

}
