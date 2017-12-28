<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterCufProfile
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterCufProfile extends CharacterBaseModel
{

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
        'id' => 'int',
        'frameHeight' => 'int',
        'frameWidth' => 'int',
        'sortBy' => 'int',
        'healthText' => 'int',
        'boolOptions' => 'int',
        'topPoint' => 'int',
        'bottomPoint' => 'int',
        'leftPoint' => 'int',
        'topOffset' => 'int',
        'bottomOffset' => 'int',
        'leftOffset' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'name',
        'frameHeight',
        'frameWidth',
        'sortBy',
        'healthText',
        'boolOptions',
        'topPoint',
        'bottomPoint',
        'leftPoint',
        'topOffset',
        'bottomOffset',
        'leftOffset'
    ];
}
