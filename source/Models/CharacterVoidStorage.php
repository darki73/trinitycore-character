<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterVoidStorage
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $itemId
 * @property int $playerGuid
 * @property int $itemEntry
 * @property int $slot
 * @property int $creatorGuid
 * @property int $randomPropertyType
 * @property int $randomProperty
 * @property int $suffixFactor
 * @property int $upgradeId
 * @property int $fixedScalingLevel
 * @property int $artifactKnowledgeLevel
 * @property int $context
 * @property string|null $bonusListIDs
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereArtifactKnowledgeLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereBonusListIDs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereContext($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereCreatorGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereFixedScalingLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereItemEntry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage wherePlayerGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereRandomProperty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereRandomPropertyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereSuffixFactor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterVoidStorage whereUpgradeId($value)
 * @mixin \Eloquent
 */
class CharacterVoidStorage extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_void_storage';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'itemId';
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
        'itemId' => 'int',
        'playerGuid' => 'int',
        'itemEntry' => 'int',
        'slot' => 'int',
        'creatorGuid' => 'int',
        'randomPropertyType' => 'int',
        'randomProperty' => 'int',
        'suffixFactor' => 'int',
        'upgradeId' => 'int',
        'fixedScalingLevel' => 'int',
        'artifactKnowledgeLevel' => 'int',
        'context' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'playerGuid',
        'itemEntry',
        'slot',
        'creatorGuid',
        'randomPropertyType',
        'randomProperty',
        'suffixFactor',
        'upgradeId',
        'fixedScalingLevel',
        'artifactKnowledgeLevel',
        'context',
        'bonusListIDs'
    ];
}
