<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterGift
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterGift extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'item_guid';
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
		'item_guid' => 'int',
		'entry' => 'int',
		'flags' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'guid',
		'entry',
		'flags'
	];

}
