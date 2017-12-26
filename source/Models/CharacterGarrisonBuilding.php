<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterGarrisonBuilding
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterGarrisonBuilding extends CharacterBaseModel {

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
		'plotInstanceId' => 'int',
		'buildingId' => 'int',
		'timeBuilt' => 'int',
		'active' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'buildingId',
		'timeBuilt',
		'active'
	];

}
