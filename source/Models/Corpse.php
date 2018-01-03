<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Corpse
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Character Global Unique Identifier
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 * @property float $orientation
 * @property int $mapId Map Identifier
 * @property int $displayId
 * @property string $itemCache
 * @property int $bytes1
 * @property int $bytes2
 * @property int $flags
 * @property int $dynFlags
 * @property int $time
 * @property int $corpseType
 * @property int $instanceId Instance Identifier
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereBytes1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereBytes2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereCorpseType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereDisplayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereDynFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereItemCache($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereOrientation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse wherePosX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse wherePosY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse wherePosZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Corpse whereTime($value)
 * @mixin \Eloquent
 */
class Corpse extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'corpse';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guid';
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
        'guid' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float',
        'orientation' => 'float',
        'mapId' => 'int',
        'displayId' => 'int',
        'bytes1' => 'int',
        'bytes2' => 'int',
        'flags' => 'int',
        'dynFlags' => 'int',
        'time' => 'int',
        'corpseType' => 'int',
        'instanceId' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'posX',
        'posY',
        'posZ',
        'orientation',
        'mapId',
        'displayId',
        'itemCache',
        'bytes1',
        'bytes2',
        'flags',
        'dynFlags',
        'time',
        'corpseType',
        'instanceId'
    ];
}
