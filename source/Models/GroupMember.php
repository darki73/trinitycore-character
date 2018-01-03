<?php namespace FreedomCore\TrinityCore\Character\Models;

use FreedomCore\TrinityCore\Character\Models\CharacterBaseModel;

/**
 * Class GroupMember
 *
 * @package FreedomCore\TrinityCore\Character\Models
 * @property int $guid
 * @property int $memberGuid
 * @property int $memberFlags
 * @property int $subgroup
 * @property int $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\CharacterBaseModel incrementID()
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GroupMember whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GroupMember whereMemberFlags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GroupMember whereMemberGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GroupMember whereRoles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\FreedomCore\TrinityCore\Character\Models\GroupMember whereSubgroup($value)
 * @mixin \Eloquent
 */
class GroupMember extends CharacterBaseModel
{

    /**
    * @inheritdoc
    * @var string
    */
    protected $table = 'group_member';
    /**
    * @inheritdoc
    * @var string
    */
    protected $primaryKey = 'memberGuid';
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
        'memberGuid' => 'int',
        'memberFlags' => 'int',
        'subgroup' => 'int',
        'roles' => 'int'
    ];
    /**
    * @inheritdoc
    * @var array
    */
    protected $fillable = [
        'guid',
        'memberFlags',
        'subgroup',
        'roles'
    ];
}
