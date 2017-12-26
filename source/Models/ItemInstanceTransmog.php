<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstanceTransmog
 * @package FreedomCore\TrinityCore\Character\Models
 */
class ItemInstanceTransmog extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'item_instance_transmog';
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
		'itemModifiedAppearanceAllSpecs' => 'int',
		'itemModifiedAppearanceSpec1' => 'int',
		'itemModifiedAppearanceSpec2' => 'int',
		'itemModifiedAppearanceSpec3' => 'int',
		'itemModifiedAppearanceSpec4' => 'int',
		'spellItemEnchantmentAllSpecs' => 'int',
		'spellItemEnchantmentSpec1' => 'int',
		'spellItemEnchantmentSpec2' => 'int',
		'spellItemEnchantmentSpec3' => 'int',
		'spellItemEnchantmentSpec4' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'itemModifiedAppearanceAllSpecs',
		'itemModifiedAppearanceSpec1',
		'itemModifiedAppearanceSpec2',
		'itemModifiedAppearanceSpec3',
		'itemModifiedAppearanceSpec4',
		'spellItemEnchantmentAllSpecs',
		'spellItemEnchantmentSpec1',
		'spellItemEnchantmentSpec2',
		'spellItemEnchantmentSpec3',
		'spellItemEnchantmentSpec4'
	];

}
