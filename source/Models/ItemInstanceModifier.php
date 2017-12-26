<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstanceModifier
 * @package FreedomCore\TrinityCore\Character\Models
 */
class ItemInstanceModifier extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'itemGuid';
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
		'itemGuid' => 'int',
		'fixedScalingLevel' => 'int',
		'artifactKnowledgeLevel' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'fixedScalingLevel',
		'artifactKnowledgeLevel'
	];

}
