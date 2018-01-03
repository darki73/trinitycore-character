<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterPet
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $id
 * @property int $entry
 * @property int $owner
 * @property int $modelid
 * @property int $CreatedBySpell
 * @property int $PetType
 * @property int $level
 * @property int $exp
 * @property int $Reactstate
 * @property string $name
 * @property int $renamed
 * @property int $slot
 * @property int $curhealth
 * @property int $curmana
 * @property int $savetime
 * @property string|null $abdata
 * @property int $specialization
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereAbdata($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereCreatedBySpell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereCurhealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereCurmana($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereEntry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereModelid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereOwner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet wherePetType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereReactstate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereRenamed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereSavetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterPet whereSpecialization($value)
 * @mixin \Eloquent
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
