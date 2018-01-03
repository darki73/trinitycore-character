<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class ItemInstanceGem
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $itemGuid
 * @property int $gemItemId1
 * @property string|null $gemBonuses1
 * @property int $gemContext1
 * @property int $gemScalingLevel1
 * @property int $gemItemId2
 * @property string|null $gemBonuses2
 * @property int $gemContext2
 * @property int $gemScalingLevel2
 * @property int $gemItemId3
 * @property string|null $gemBonuses3
 * @property int $gemContext3
 * @property int $gemScalingLevel3
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemBonuses1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemBonuses2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemBonuses3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemContext1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemContext2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemContext3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemItemId1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemItemId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemItemId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemScalingLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemScalingLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereGemScalingLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\ItemInstanceGem whereItemGuid($value)
 * @mixin \Eloquent
 */
class ItemInstanceGem extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'itemGuid';
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
        'itemGuid' => 'int',
        'gemItemId1' => 'int',
        'gemContext1' => 'int',
        'gemScalingLevel1' => 'int',
        'gemItemId2' => 'int',
        'gemContext2' => 'int',
        'gemScalingLevel2' => 'int',
        'gemItemId3' => 'int',
        'gemContext3' => 'int',
        'gemScalingLevel3' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'gemItemId1',
        'gemBonuses1',
        'gemContext1',
        'gemScalingLevel1',
        'gemItemId2',
        'gemBonuses2',
        'gemContext2',
        'gemScalingLevel2',
        'gemItemId3',
        'gemBonuses3',
        'gemContext3',
        'gemScalingLevel3'
    ];
}
