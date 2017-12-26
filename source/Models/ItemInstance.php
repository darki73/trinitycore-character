<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstance
 * @package FreedomCore\TrinityCore\Character\Models
 */
class ItemInstance extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'item_instance';
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
		'itemEntry' => 'int',
		'owner_guid' => 'int',
		'creatorGuid' => 'int',
		'giftCreatorGuid' => 'int',
		'count' => 'int',
		'duration' => 'int',
		'flags' => 'int',
		'randomPropertyType' => 'int',
		'randomPropertyId' => 'int',
		'durability' => 'int',
		'playedTime' => 'int',
		'transmogrification' => 'int',
		'upgradeId' => 'int',
		'enchantIllusion' => 'int',
		'battlePetSpeciesId' => 'int',
		'battlePetBreedData' => 'int',
		'battlePetLevel' => 'int',
		'battlePetDisplayId' => 'int',
		'context' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'itemEntry',
		'owner_guid',
		'creatorGuid',
		'giftCreatorGuid',
		'count',
		'duration',
		'charges',
		'flags',
		'enchantments',
		'randomPropertyType',
		'randomPropertyId',
		'durability',
		'playedTime',
		'text',
		'transmogrification',
		'upgradeId',
		'enchantIllusion',
		'battlePetSpeciesId',
		'battlePetBreedData',
		'battlePetLevel',
		'battlePetDisplayId',
		'context',
		'bonusListIDs'
	];

}
