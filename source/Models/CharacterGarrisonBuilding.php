<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterGarrisonBuilding
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $plotInstanceId
 * @property int $buildingId
 * @property int $timeBuilt
 * @property int $active
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonBuilding whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonBuilding whereBuildingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonBuilding whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonBuilding wherePlotInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterGarrisonBuilding whereTimeBuilt($value)
 * @mixin \Eloquent
 */
class CharacterGarrisonBuilding extends CharacterBaseModel
{

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
        'plotInstanceId' => 'int',
        'buildingId' => 'int',
        'timeBuilt' => 'int',
        'active' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'buildingId',
        'timeBuilt',
        'active'
    ];
}
