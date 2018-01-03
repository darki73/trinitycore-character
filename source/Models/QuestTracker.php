<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class QuestTracker
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $id
 * @property int $character_guid
 * @property \Carbon\Carbon $quest_accept_time
 * @property \Carbon\Carbon|null $quest_complete_time
 * @property \Carbon\Carbon|null $quest_abandon_time
 * @property bool $completed_by_gm
 * @property string $core_hash
 * @property string $core_revision
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereCharacterGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereCompletedByGm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereCoreHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereCoreRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereQuestAbandonTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereQuestAcceptTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\QuestTracker whereQuestCompleteTime($value)
 * @mixin \Eloquent
 */
class QuestTracker extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'quest_tracker';
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
        'id' => 'int',
        'character_guid' => 'int',
        'completed_by_gm' => 'bool'
    ];
    /**
    * @inheritdoc
    * @var string
    */
    protected $dates = [
        'quest_accept_time',
        'quest_complete_time',
        'quest_abandon_time'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'quest_accept_time',
        'quest_complete_time',
        'quest_abandon_time',
        'completed_by_gm',
        'core_hash',
        'core_revision'
    ];
}
