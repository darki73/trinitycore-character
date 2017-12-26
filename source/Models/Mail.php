<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Mail
 * @package FreedomCore\TrinityCore\Character\Models
 */
class Mail extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'mail';
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
		'id' => 'int',
		'messageType' => 'int',
		'stationery' => 'int',
		'mailTemplateId' => 'int',
		'sender' => 'int',
		'receiver' => 'int',
		'has_items' => 'int',
		'expire_time' => 'int',
		'deliver_time' => 'int',
		'money' => 'int',
		'cod' => 'int',
		'checked' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'messageType',
		'stationery',
		'mailTemplateId',
		'sender',
		'receiver',
		'subject',
		'body',
		'has_items',
		'expire_time',
		'deliver_time',
		'money',
		'cod',
		'checked'
	];

}
