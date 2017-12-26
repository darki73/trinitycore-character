<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterGarrisonFollowerAbility
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterGarrisonFollowerAbility extends CharacterBaseModel {

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
		'abilityId' => 'int',
		'slot' => 'int'
	];

    /**
     * Get garrison follower to whom this
     * ability belongs to
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function garrisonFollower() {
		return $this->belongsTo(CharacterGarrisonFollower::class, 'dbId');
	}

}
