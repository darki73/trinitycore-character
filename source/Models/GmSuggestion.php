<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GmSuggestion
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $id
 * @property int $playerGuid
 * @property string $note
 * @property int $createTime
 * @property int $mapId
 * @property float $posX
 * @property float $posY
 * @property float $posZ
 * @property float $facing
 * @property int $closedBy
 * @property int $assignedTo GUID of admin to whom ticket is assigned
 * @property string $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereAssignedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereClosedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereFacing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion wherePlayerGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion wherePosX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion wherePosY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmSuggestion wherePosZ($value)
 * @mixin \Eloquent
 */
class GmSuggestion extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'gm_suggestion';
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
        'id' => 'int',
        'playerGuid' => 'int',
        'createTime' => 'int',
        'mapId' => 'int',
        'posX' => 'float',
        'posY' => 'float',
        'posZ' => 'float',
        'facing' => 'float',
        'closedBy' => 'int',
        'assignedTo' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'playerGuid',
        'note',
        'createTime',
        'mapId',
        'posX',
        'posY',
        'posZ',
        'facing',
        'closedBy',
        'assignedTo',
        'comment'
    ];
}
