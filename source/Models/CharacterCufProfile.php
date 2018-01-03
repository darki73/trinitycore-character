<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterCufProfile
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Character Guid
 * @property int $id Profile Id (0-4)
 * @property string $name Profile Name
 * @property int $frameHeight Profile Frame Height
 * @property int $frameWidth Profile Frame Width
 * @property int $sortBy Frame Sort By
 * @property int $healthText Frame Health Text
 * @property int $boolOptions Many Configurable Bool Options
 * @property int $topPoint Frame top alignment
 * @property int $bottomPoint Frame bottom alignment
 * @property int $leftPoint Frame left alignment
 * @property int $topOffset Frame position offset from top
 * @property int $bottomOffset Frame position offset from bottom
 * @property int $leftOffset Frame position offset from left
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereBoolOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereBottomOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereBottomPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereFrameHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereFrameWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereHealthText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereLeftOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereLeftPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereSortBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereTopOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterCufProfile whereTopPoint($value)
 * @mixin \Eloquent
 */
class CharacterCufProfile extends CharacterBaseModel
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
        'id' => 'int',
        'frameHeight' => 'int',
        'frameWidth' => 'int',
        'sortBy' => 'int',
        'healthText' => 'int',
        'boolOptions' => 'int',
        'topPoint' => 'int',
        'bottomPoint' => 'int',
        'leftPoint' => 'int',
        'topOffset' => 'int',
        'bottomOffset' => 'int',
        'leftOffset' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'name',
        'frameHeight',
        'frameWidth',
        'sortBy',
        'healthText',
        'boolOptions',
        'topPoint',
        'bottomPoint',
        'leftPoint',
        'topOffset',
        'bottomOffset',
        'leftOffset'
    ];
}
