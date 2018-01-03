<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Guild
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guildid
 * @property string $name
 * @property int $leaderguid
 * @property int $EmblemStyle
 * @property int $EmblemColor
 * @property int $BorderStyle
 * @property int $BorderColor
 * @property int $BackgroundColor
 * @property string $info
 * @property string $motd
 * @property int $createdate
 * @property int $BankMoney
 * @property-read \Illuminate\Database\Eloquent\Collection|\FreedomCore\TrinityCore\Character\Models\GuildFinderApplicant[] $applicants
 * @property-read \FreedomCore\TrinityCore\Character\Models\Character $leader
 * @property-read \Illuminate\Database\Eloquent\Collection|\FreedomCore\TrinityCore\Character\Models\GuildMember[] $members
 * @property-read \FreedomCore\TrinityCore\Character\Models\GuildFinderGuildSetting $recruitmentSettings
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereBackgroundColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereBankMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereBorderColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereBorderStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereCreatedate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereEmblemColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereEmblemStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereGuildid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereLeaderguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereMotd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Guild whereName($value)
 * @mixin \Eloquent
 */
class Guild extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guildid';
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
        'guildid' => 'int',
        'leaderguid' => 'int',
        'EmblemStyle' => 'int',
        'EmblemColor' => 'int',
        'BorderStyle' => 'int',
        'BorderColor' => 'int',
        'BackgroundColor' => 'int',
        'createdate' => 'int',
        'BankMoney' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'name',
        'leaderguid',
        'EmblemStyle',
        'EmblemColor',
        'BorderStyle',
        'BorderColor',
        'BackgroundColor',
        'info',
        'motd',
        'createdate',
        'BankMoney'
    ];

    /**
     * Get character of the leader of the guild
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function leader()
    {
        return $this->belongsTo(Character::class, 'leaderguid', 'guid');
    }

    /**
     * Get members of the guild
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members()
    {
        return $this->hasMany(GuildMember::class, 'guildid');
    }

    /**
     * Recruitment Settings For Specified Guild
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recruitmentSettings()
    {
        return $this->hasOne(GuildFinderGuildSetting::class, 'guildid');
    }

    /**
     * Get guild applications through the LFG system
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applicants()
    {
        return $this->hasMany(GuildFinderApplicant::class, 'guildId');
    }
}
