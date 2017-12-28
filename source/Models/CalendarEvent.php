<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CalendarEvent
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CalendarEvent extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'EventID';
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
        'EventID' => 'int',
        'Owner' => 'int',
        'EventType' => 'bool',
        'TextureID' => 'int',
        'Date' => 'int',
        'Flags' => 'int',
        'LockDate' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'Owner',
        'Title',
        'Description',
        'EventType',
        'TextureID',
        'Date',
        'Flags',
        'LockDate'
    ];
}
