<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterQuestStatusObjectivesCriteria
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterQuestStatusObjectivesCriteria extends CharacterBaseModel {

    /**
     * @inheritdoc
     * @var string
     */
    protected $table = 'character_queststatus_objectives_criteria';
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
		'questObjectiveId' => 'int'
	];

}
