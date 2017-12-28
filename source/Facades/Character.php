<?php namespace FreedomCore\TrinityCore\Character\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Character
 * @package FreedomCore\TrinityCore\Character\Facades
 */
class Character extends Facade
{

    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'character';
    }
}
