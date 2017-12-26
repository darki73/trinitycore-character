<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterInventory
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterInventory extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'character_inventory';
	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'item';
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
		'bag' => 'int',
		'slot' => 'int',
		'item' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'guid',
		'bag',
		'slot'
	];

}
