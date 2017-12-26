<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemLootItem
 * @package FreedomCore\TrinityCore\Character\Models
 */
class ItemLootItem extends CharacterBaseModel {

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
		'container_id' => 'int',
		'item_id' => 'int',
		'item_count' => 'int',
		'follow_rules' => 'bool',
		'ffa' => 'bool',
		'blocked' => 'bool',
		'counted' => 'bool',
		'under_threshold' => 'bool',
		'needs_quest' => 'bool',
		'rnd_type' => 'int',
		'rnd_prop' => 'int',
		'rnd_suffix' => 'int',
		'context' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'item_count',
		'follow_rules',
		'ffa',
		'blocked',
		'counted',
		'under_threshold',
		'needs_quest',
		'rnd_type',
		'rnd_prop',
		'rnd_suffix',
		'context',
		'bonus_list_ids'
	];

}
