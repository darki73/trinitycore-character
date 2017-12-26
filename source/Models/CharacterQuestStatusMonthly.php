<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterQuestStatusMonthly
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterQuestStatusMonthly extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'character_queststatus_monthly';
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
		'quest' => 'int'
	];

}