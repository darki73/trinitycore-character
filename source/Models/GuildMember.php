<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildMember
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GuildMember extends CharacterBaseModel {

	/**
	* @inheritdoc
	* @var string
	*/
	protected $table = 'guild_member';
	/**
	* @inheritdoc
	* @var string
	*/
	protected $primaryKey = 'guid';
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
		'guid' => 'int',
		'rank' => 'int'
	];
	/**
	* @inheritdoc
	* @var array
	*/
	protected $fillable = [
		'guildid',
		'rank',
		'pnote',
		'offnote'
	];

    /**
     * Get character information
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function character() {
        return $this->belongsTo(Character::class, 'guid');
    }

    /**
     * Get guild to which this member belongs to
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function guild() {
	    return $this->belongsTo(Guild::class, 'guildid');
    }

}
