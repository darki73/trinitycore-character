<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstanceArtifactPower
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $itemGuid
 * @property int $artifactPowerId
 * @property int $purchasedRank
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceArtifactPower whereArtifactPowerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceArtifactPower whereItemGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceArtifactPower wherePurchasedRank($value)
 * @mixin \Eloquent
 */
class ItemInstanceArtifactPower extends CharacterBaseModel
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
        'itemGuid' => 'int',
        'artifactPowerId' => 'int',
        'purchasedRank' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'purchasedRank'
    ];
}
