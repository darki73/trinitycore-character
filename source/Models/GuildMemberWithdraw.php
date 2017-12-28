<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GuildMemberWithdraw
 * @package FreedomCore\TrinityCore\Character\Models
 */
class GuildMemberWithdraw extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'guild_member_withdraw';
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
        'guid' => 'int',
        'tab0' => 'int',
        'tab1' => 'int',
        'tab2' => 'int',
        'tab3' => 'int',
        'tab4' => 'int',
        'tab5' => 'int',
        'tab6' => 'int',
        'tab7' => 'int',
        'money' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'tab0',
        'tab1',
        'tab2',
        'tab3',
        'tab4',
        'tab5',
        'tab6',
        'tab7',
        'money'
    ];
}
