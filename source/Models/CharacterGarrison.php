<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterGarrison
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterGarrison extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'character_garrison';
	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'guid';
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
		'guid' => 'int',
		'siteLevelId' => 'int',
		'followerActivationsRemainingToday' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'siteLevelId',
		'followerActivationsRemainingToday'
	];

}
