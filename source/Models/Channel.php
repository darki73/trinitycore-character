<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Channel
 * @package FreedomCore\TrinityCore\Character\Models
 */
class Channel extends CharacterBaseModel {

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
		'team' => 'int',
		'announce' => 'int',
		'ownership' => 'int',
		'lastUsed' => 'int'
	];
	/**
	* @inheritdoc
	* @var string
	*/
	protected $hidden = [
		'password'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'announce',
		'ownership',
		'password',
		'bannedList',
		'lastUsed'
	];

}
