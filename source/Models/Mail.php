<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class Mail
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $id Identifier
 * @property int $messageType
 * @property int $stationery
 * @property int $mailTemplateId
 * @property int $sender Character Global Unique Identifier
 * @property int $receiver Character Global Unique Identifier
 * @property string|null $subject
 * @property string|null $body
 * @property int $has_items
 * @property int $expire_time
 * @property int $deliver_time
 * @property int $money
 * @property int $cod
 * @property int $checked
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereCod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereDeliverTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereExpireTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereHasItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereMailTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereMessageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereReceiver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereStationery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\Mail whereSubject($value)
 * @mixin \Eloquent
 */
class Mail extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'mail';
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
        'id' => 'int',
        'messageType' => 'int',
        'stationery' => 'int',
        'mailTemplateId' => 'int',
        'sender' => 'int',
        'receiver' => 'int',
        'has_items' => 'int',
        'expire_time' => 'int',
        'deliver_time' => 'int',
        'money' => 'int',
        'cod' => 'int',
        'checked' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'messageType',
        'stationery',
        'mailTemplateId',
        'sender',
        'receiver',
        'subject',
        'body',
        'has_items',
        'expire_time',
        'deliver_time',
        'money',
        'cod',
        'checked'
    ];
}
