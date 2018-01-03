<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Bugreport
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $id Identifier
 * @property string $type
 * @property string $content
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\BugReport whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\BugReport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\BugReport whereType($value)
 * @mixin \Eloquent
 */
class BugReport extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'bugreport';
    /**
    * @inheritdoc
    * @var bool
    */
    public $timestamps = false;
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'type',
        'content'
    ];
}
