<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildFinderGuildSetting
 * @package FreedomCore\TrinityCore\Character\Models
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
