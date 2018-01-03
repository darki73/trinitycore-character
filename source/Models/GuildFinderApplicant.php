<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildFinderApplicant
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guildId
 * @property int $playerGuid
 * @property int $availability
 * @property int $classRole
 * @property int $interests
 * @property string|null $comment
 * @property int $submitTime
 * @property-read \FreedomCore\TrinityCore\Character\Models\Character $character
 * @property-read \FreedomCore\TrinityCore\Character\Models\Guild $guild
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant whereClassRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant whereGuildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant whereInterests($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant wherePlayerGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant whereSubmitTime($value)
 * @mixin \Eloquent
 */
class GuildFinderApplicant extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_finder_applicant';
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
        'playerGuid' => 'int',
        'availability' => 'int',
        'classRole' => 'int',
        'interests' => 'int',
        'submitTime' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'availability',
        'classRole',
        'interests',
        'comment',
        'submitTime'
    ];

    /**
     * Get character to which this application belongs to
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function character()
    {
        return $this->belongsTo(Character::class, 'playerGuid');
    }

    /**
     * Get guid to which character has applied through the LFG system
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guild()
    {
        return $this->belongsTo(Guild::class, 'guildId');
    }
}
