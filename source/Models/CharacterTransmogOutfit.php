<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterTransmogOutfit
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterTransmogOutfit extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'setguid';
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
        'setindex' => 'int',
        'ignore_mask' => 'int',
        'appearance0' => 'int',
        'appearance1' => 'int',
        'appearance2' => 'int',
        'appearance3' => 'int',
        'appearance4' => 'int',
        'appearance5' => 'int',
        'appearance6' => 'int',
        'appearance7' => 'int',
        'appearance8' => 'int',
        'appearance9' => 'int',
        'appearance10' => 'int',
        'appearance11' => 'int',
        'appearance12' => 'int',
        'appearance13' => 'int',
        'appearance14' => 'int',
        'appearance15' => 'int',
        'appearance16' => 'int',
        'appearance17' => 'int',
        'appearance18' => 'int',
        'mainHandEnchant' => 'int',
        'offHandEnchant' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'guid',
        'setindex',
        'name',
        'iconname',
        'ignore_mask',
        'appearance0',
        'appearance1',
        'appearance2',
        'appearance3',
        'appearance4',
        'appearance5',
        'appearance6',
        'appearance7',
        'appearance8',
        'appearance9',
        'appearance10',
        'appearance11',
        'appearance12',
        'appearance13',
        'appearance14',
        'appearance15',
        'appearance16',
        'appearance17',
        'appearance18',
        'mainHandEnchant',
        'offHandEnchant'
    ];
}
