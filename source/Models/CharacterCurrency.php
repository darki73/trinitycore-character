<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterCurrency
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterCurrency extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'character_currency';
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
		'CharacterGuid' => 'int',
		'Currency' => 'int',
		'Quantity' => 'int',
		'WeeklyQuantity' => 'int',
		'TrackedQuantity' => 'int',
		'Flags' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'Quantity',
		'WeeklyQuantity',
		'TrackedQuantity',
		'Flags'
	];

}
