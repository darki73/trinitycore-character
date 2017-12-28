<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GmComplaint
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GmComplaint extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'gm_complaint';
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
        'targetCharacterGuid' => 'int',
        'complaintType' => 'int',
        'reportLineIndex' => 'int',
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
        'targetCharacterGuid',
        'complaintType',
        'reportLineIndex',
        'closedBy',
        'assignedTo',
        'comment'
    ];
}
