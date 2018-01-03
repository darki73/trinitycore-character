<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class UpdatesInclude
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property string $path directory to include. $ means relative to the source directory.
 * @property string $state defines if the directory contains released or archived updates.
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\UpdatesInclude wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\UpdatesInclude whereState($value)
 * @mixin \Eloquent
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
