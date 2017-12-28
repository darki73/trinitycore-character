<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GmSuggestion
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GmSuggestion extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'gm_suggestion';
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
        'id' => 'int',
        'playerGuid' => 'int',
        'createTime' => 'int',
        'mapId' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float',
        'facing' => 'float',
        'closedBy' => 'int',
        'assignedTo' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'playerGuid',
        'note',
        'createTime',
        'mapId',
        'posX',
        'posY',
        'posZ',
        'facing',
        'closedBy',
        'assignedTo',
        'comment'
    ];
}
