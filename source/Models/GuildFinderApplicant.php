<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildFinderApplicant
 * @package FreedomCore\TrinityCore\Character\Models
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
