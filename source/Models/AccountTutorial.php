<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class AccountTutorial
 * @package FreedomCore\TrinityCore\Character\Models
 */
class AccountTutorial extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'account_tutorial';
	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'accountId';
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
		'accountId' => 'int',
		'tut0' => 'int',
		'tut1' => 'int',
		'tut2' => 'int',
		'tut3' => 'int',
		'tut4' => 'int',
		'tut5' => 'int',
		'tut6' => 'int',
		'tut7' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'tut0',
		'tut1',
		'tut2',
		'tut3',
		'tut4',
		'tut5',
		'tut6',
		'tut7'
	];

}
