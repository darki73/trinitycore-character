<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class CharacterDeclinedName
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid Global Unique Identifier
 * @property string $genitive
 * @property string $dative
 * @property string $accusative
 * @property string $instrumental
 * @property string $prepositional
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterDeclinedName whereAccusative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterDeclinedName whereDative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterDeclinedName whereGenitive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterDeclinedName whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterDeclinedName whereInstrumental($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterDeclinedName wherePrepositional($value)
 * @mixin \Eloquent
 */
class CharacterDeclinedName extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'character_declinedname';
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
        'guid' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'genitive',
        'dative',
        'accusative',
        'instrumental',
        'prepositional'
    ];
}
