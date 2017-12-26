<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GroupMember
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GroupMember extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'group_member';
	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'memberGuid';
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
		'memberGuid' => 'int',
		'memberFlags' => 'int',
		'subgroup' => 'int',
		'roles' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'guid',
		'memberFlags',
		'subgroup',
		'roles'
	];

}
