<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterVoidStorage
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterVoidStorage extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_void_storage';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'itemId';
    /**
    * @inheritdoc
    * @var bool
    */
    public $incrementing = true;
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
        'itemId' => 'int',
        'playerGuid' => 'int',
        'itemEntry' => 'int',
        'slot' => 'int',
        'creatorGuid' => 'int',
        'randomPropertyType' => 'int',
        'randomProperty' => 'int',
        'suffixFactor' => 'int',
        'upgradeId' => 'int',
        'fixedScalingLevel' => 'int',
        'artifactKnowledgeLevel' => 'int',
        'context' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'playerGuid',
        'itemEntry',
        'slot',
        'creatorGuid',
        'randomPropertyType',
        'randomProperty',
        'suffixFactor',
        'upgradeId',
        'fixedScalingLevel',
        'artifactKnowledgeLevel',
        'context',
        'bonusListIDs'
    ];
}
