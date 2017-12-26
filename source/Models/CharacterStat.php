<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterStat
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterStat extends CharacterBaseModel {

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
		'maxhealth' => 'int',
		'maxpower1' => 'int',
		'maxpower2' => 'int',
		'maxpower3' => 'int',
		'maxpower4' => 'int',
		'maxpower5' => 'int',
		'maxpower6' => 'int',
		'strength' => 'int',
		'agility' => 'int',
		'stamina' => 'int',
		'intellect' => 'int',
		'armor' => 'int',
		'resHoly' => 'int',
		'resFire' => 'int',
		'resNature' => 'int',
		'resFrost' => 'int',
		'resShadow' => 'int',
		'resArcane' => 'int',
		'blockPct' => 'float',
		'dodgePct' => 'float',
		'parryPct' => 'float',
		'critPct' => 'float',
		'rangedCritPct' => 'float',
		'spellCritPct' => 'float',
		'attackPower' => 'int',
		'rangedAttackPower' => 'int',
		'spellPower' => 'int',
		'resilience' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'maxhealth',
		'maxpower1',
		'maxpower2',
		'maxpower3',
		'maxpower4',
		'maxpower5',
		'maxpower6',
		'strength',
		'agility',
		'stamina',
		'intellect',
		'armor',
		'resHoly',
		'resFire',
		'resNature',
		'resFrost',
		'resShadow',
		'resArcane',
		'blockPct',
		'dodgePct',
		'parryPct',
		'critPct',
		'rangedCritPct',
		'spellCritPct',
		'attackPower',
		'rangedAttackPower',
		'spellPower',
		'resilience'
	];

}
