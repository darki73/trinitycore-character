<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterHomebind
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property int $mapId Map Identifier
 * @property int $zoneId Zone Identifier
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterHomebind whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterHomebind whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterHomebind wherePosX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterHomebind wherePosY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterHomebind wherePosZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterHomebind whereZoneId($value)
 * @mixin \Eloquent
 */
class CharacterHomebind extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_homebind';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'true';
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
        'mapId' => 'int',
        'zoneId' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'mapId',
        'zoneId',
        'posX',
        'posY',
        'posZ'
    ];
}
