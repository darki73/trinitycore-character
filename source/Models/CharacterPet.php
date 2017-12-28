<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterPet
 * @package FreedomCore\TrinityCore\Character\Models
 */
class CharacterPet extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_pet';
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
        'id' => 'int',
        'entry' => 'int',
        'owner' => 'int',
        'modelid' => 'int',
        'CreatedBySpell' => 'int',
        'PetType' => 'int',
        'level' => 'int',
        'exp' => 'int',
        'Reactstate' => 'int',
        'renamed' => 'int',
        'slot' => 'int',
        'curhealth' => 'int',
        'curmana' => 'int',
        'savetime' => 'int',
        'specialization' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'entry',
        'owner',
        'modelid',
        'CreatedBySpell',
        'PetType',
        'level',
        'exp',
        'Reactstate',
        'name',
        'renamed',
        'slot',
        'curhealth',
        'curmana',
        'savetime',
        'abdata',
        'specialization'
    ];
}
