<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class LfgDatum
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property int $dungeon
 * @property int $state
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\LfgData whereDungeon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\LfgData whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\LfgData whereState($value)
 * @mixin \Eloquent
 */
class LfgData extends CharacterBaseModel
{

    /**
     * @inheritdoc
     * @var string
     */
    protected $table = 'lfg_data';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guid';
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
        'dungeon' => 'int',
        'state' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'dungeon',
        'state'
    ];
}
