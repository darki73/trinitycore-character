<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Group
 * @package FreedomCore\TrinityCore\Character\Models
 */
class Group extends CharacterBaseModel {

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
