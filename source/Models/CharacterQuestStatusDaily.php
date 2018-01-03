<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterQuestStatusDaily
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property int $quest Quest Identifier
 * @property int $time
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusDaily whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusDaily whereQuest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterQuestStatusDaily whereTime($value)
 * @mixin \Eloquent
 */
class CharacterQuestStatusDaily extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_queststatus_daily';
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
        'quest' => 'int',
        'time' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'time'
    ];
}
