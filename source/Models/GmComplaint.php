<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GmComplaint
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
 * @property int $targetCharacterGuid
 * @property int $complaintType
 * @property int $reportLineIndex
 * @property int $closedBy
 * @property int $assignedTo GUID of admin to whom ticket is assigned
 * @property string $comment
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereAssignedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereClosedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereComplaintType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereFacing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereMapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint wherePlayerGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint wherePosX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint wherePosY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint wherePosZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereReportLineIndex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GmComplaint whereTargetCharacterGuid($value)
 * @mixin \Eloquent
 */
class GmComplaint extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'gm_complaint';
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
        'targetCharacterGuid' => 'int',
        'complaintType' => 'int',
        'reportLineIndex' => 'int',
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
        'targetCharacterGuid',
        'complaintType',
        'reportLineIndex',
        'closedBy',
        'assignedTo',
        'comment'
    ];
}
