<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PvpstatsBattleground
 * @package FreedomCore\TrinityCore\Character\Models
 */
class PvpstatsBattleground extends CharacterBaseModel {

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
		'winner_faction' => 'int',
		'bracket_id' => 'int',
		'type' => 'int'
	];
	/**
	* @inheritdoc
	* @var string
	*/
	protected $dates = [
		'date'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'winner_faction',
		'bracket_id',
		'type',
		'date'
	];

}
