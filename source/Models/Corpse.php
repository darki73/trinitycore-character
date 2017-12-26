<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Corpse
 * @package FreedomCore\TrinityCore\Character\Models
 */
class Corpse extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'corpse';
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
		'posX' => 'float',
		'posY' => 'float',
		'posZ' => 'float',
		'orientation' => 'float',
		'mapId' => 'int',
		'displayId' => 'int',
		'bytes1' => 'int',
		'bytes2' => 'int',
		'flags' => 'int',
		'dynFlags' => 'int',
		'time' => 'int',
		'corpseType' => 'int',
		'instanceId' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'posX',
		'posY',
		'posZ',
		'orientation',
		'mapId',
		'displayId',
		'itemCache',
		'bytes1',
		'bytes2',
		'flags',
		'dynFlags',
		'time',
		'corpseType',
		'instanceId'
	];

}
