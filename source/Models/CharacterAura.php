<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterAura
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterAura extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'character_aura';
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
		'casterGuid' => 'binary',
		'itemGuid' => 'binary',
		'spell' => 'int',
		'effectMask' => 'int',
		'recalculateMask' => 'int',
		'stackCount' => 'int',
		'maxDuration' => 'int',
		'remainTime' => 'int',
		'remainCharges' => 'int',
		'castItemLevel' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'recalculateMask',
		'stackCount',
		'maxDuration',
		'remainTime',
		'remainCharges',
		'castItemLevel'
	];

}
