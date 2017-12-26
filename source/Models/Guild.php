<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Guild
 * @package FreedomCore\TrinityCore\Character\Models
 */
class Guild extends CharacterBaseModel {

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
	public function leader() {
	    return $this->belongsTo(Character::class, 'leaderguid', 'guid');
    }

    /**
     * Get members of the guild
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members() {
	    return $this->hasMany(GuildMember::class, 'guildid');
    }

    /**
     * Recruitment Settings For Specified Guild
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recruitmentSettings() {
        return $this->hasOne(GuildFinderGuildSetting::class, 'guildid');
    }

    /**
     * Get guild applications through the LFG system
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applicants() {
        return $this->hasMany(GuildFinderApplicant::class, 'guildId');
    }

}
