<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CalendarInvite
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CalendarInvite extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'InviteID';
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
		'InviteID' => 'int',
		'EventID' => 'int',
		'Invitee' => 'int',
		'Sender' => 'int',
		'Status' => 'bool',
		'ResponseTime' => 'int',
		'ModerationRank' => 'bool'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'EventID',
		'Invitee',
		'Sender',
		'Status',
		'ResponseTime',
		'ModerationRank',
		'Note'
	];

}
