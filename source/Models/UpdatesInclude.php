<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class UpdatesInclude
 * @package FreedomCore\TrinityCore\Character\Models
 */
class UpdatesInclude extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'updates_include';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'path';
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
    protected $fillable = [
        'state'
    ];
}
