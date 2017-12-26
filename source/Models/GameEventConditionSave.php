<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GameEventConditionSave
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GameEventConditionSave extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'game_event_condition_save';
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
		'eventEntry' => 'int',
		'condition_id' => 'int',
		'done' => 'float'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'done'
	];

}
