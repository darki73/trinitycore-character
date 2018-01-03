<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Update
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property string $name filename with extension of the update.
 * @property string|null $hash sha1 hash of the sql file.
 * @property string $state defines if an update is released or archived.
 * @property \Carbon\Carbon $timestamp timestamp when the query was applied.
 * @property int $speed time the query takes to apply in ms.
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Update whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Update whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Update whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Update whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Update whereTimestamp($value)
 * @mixin \Eloquent
 */
class Update extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'name';
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
        'speed' => 'int'
    ];
    /**
    * @inheritdoc
    * @var string
    */
    protected $dates = [
        'timestamp'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'hash',
        'state',
        'timestamp',
        'speed'
    ];
}
