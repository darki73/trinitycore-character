<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstanceArtifact
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $itemGuid
 * @property int $xp
 * @property int $artifactAppearanceId
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceArtifact whereArtifactAppearanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceArtifact whereItemGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceArtifact whereXp($value)
 * @mixin \Eloquent
 */
class ItemInstanceArtifact extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'item_instance_artifact';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'itemGuid';
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
        'xp' => 'int',
        'artifactAppearanceId' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'xp',
        'artifactAppearanceId'
    ];
}
