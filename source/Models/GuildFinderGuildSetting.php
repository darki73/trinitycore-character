<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildFinderGuildSetting
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guildId
 * @property int $availability
 * @property int $classRoles
 * @property int $interests
 * @property int $level
 * @property int $listed
 * @property string|null $comment
 * @property-read \FreedomCore\TrinityCore\Character\Models\Guild $guild
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting whereClassRoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting whereGuildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting whereInterests($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting whereListed($value)
 * @mixin \Eloquent
 */
class GuildFinderGuildSetting extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guildId';
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
        'guildId' => 'int',
        'availability' => 'int',
        'classRoles' => 'int',
        'interests' => 'int',
        'level' => 'int',
        'listed' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'availability',
        'classRoles',
        'interests',
        'level',
        'listed',
        'comment'
    ];

    /**
     * Get guild for loaded settings
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guild()
    {
        return $this->belongsTo(Guild::class, 'guildid');
    }
}
