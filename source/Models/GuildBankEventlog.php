<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildBankEventlog
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GuildBankEventlog extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'guild_bank_eventlog';
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
		'guildid' => 'int',
		'LogGuid' => 'int',
		'TabId' => 'int',
		'EventType' => 'int',
		'PlayerGuid' => 'int',
		'ItemOrMoney' => 'int',
		'ItemStackCount' => 'int',
		'DestTabId' => 'int',
		'TimeStamp' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'EventType',
		'PlayerGuid',
		'ItemOrMoney',
		'ItemStackCount',
		'DestTabId',
		'TimeStamp'
	];

}
