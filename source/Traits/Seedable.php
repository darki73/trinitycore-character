<?php namespace FreedomCore\TrinityCore\Character\Traits;

/**'
 * Trait Seedable
 * @package FreedomCore\TrinityCore\Character\Traits
 */
trait Seedable
{

    /**
     * Seed Specified Class
     * @param $class
     */
    public function seed($class)
    {
        if (!class_exists($class)) {
            require_once $this->seedersPath . $class . '.php';
        }
        with(new $class())->run();
    }
}
