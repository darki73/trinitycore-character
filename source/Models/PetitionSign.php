<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PetitionSign
 * @package FreedomCore\TrinityCore\Character\Models
 */
class PetitionSign extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'petition_sign';
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
		'ownerguid' => 'int',
		'petitionguid' => 'int',
		'playerguid' => 'int',
		'player_account' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'ownerguid',
		'player_account'
	];

}
