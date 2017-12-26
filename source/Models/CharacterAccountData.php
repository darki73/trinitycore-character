<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterAccountData
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterAccountData extends CharacterBaseModel {

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
		'type' => 'int',
		'time' => 'int',
		'data' => 'boolean'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'time',
		'data'
	];

}
