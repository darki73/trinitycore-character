<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterBattlegroundData
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @mixin \Eloquent
 */
class CharacterBattlegroundData extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'guid';
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
        'guid' => 'int',
        'instanceId' => 'int',
        'team' => 'int',
        'joinX' => 'float',
        'joinY' => 'float',
        'joinZ' => 'float',
        'joinO' => 'float',
        'joinMapId' => 'int',
        'taxiStart' => 'int',
        'taxiEnd' => 'int',
        'mountSpell' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'instanceId',
        'team',
        'joinX',
        'joinY',
        'joinZ',
        'joinO',
        'joinMapId',
        'taxiStart',
        'taxiEnd',
        'mountSpell'
    ];
}
