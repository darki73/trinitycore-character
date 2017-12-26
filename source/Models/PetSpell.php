<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class PetSpell
 * @package FreedomCore\TrinityCore\Character\Models
 */
class PetSpell extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'pet_spell';
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
		'active' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'active'
	];

}
