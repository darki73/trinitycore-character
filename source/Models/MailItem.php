<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class MailItem
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $mail_id
 * @property int $item_guid
 * @property int $receiver Character Global Unique Identifier
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\MailItem whereItemGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\MailItem whereMailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\MailItem whereReceiver($value)
 * @mixin \Eloquent
 */
class MailItem extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'item_guid';
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
        'mail_id' => 'int',
        'item_guid' => 'int',
        'receiver' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'mail_id',
        'receiver'
    ];
}
