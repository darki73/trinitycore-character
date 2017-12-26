<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterSpellCooldown
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterSpellCooldown extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'character_spell_cooldown';
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
		'spell' => 'int',
		'item' => 'int',
		'time' => 'int',
		'categoryId' => 'int',
		'categoryEnd' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'item',
		'time',
		'categoryId',
		'categoryEnd'
	];

}
