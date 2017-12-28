<?php namespace FreedomCore\TrinityCore\Character;

use Illuminate\Filesystem\Filesystem;

/**
 * Class Character
 * @package FreedomCore\TrinityCore\Character
 */
class Character
{

    /**
     * Package Version
     * @var string|null
     */
    protected $version = null;

    /**
     * FileSystem Instance
     * @var Filesystem|\Illuminate\Foundation\Application|mixed|null
     */
    protected $fileSystem = null;

    /**
     * Character constructor.
     */
    public function __construct()
    {
        $this->fileSystem = app(FileSystem::class);
        $this->findPackageVersion();
    }

    /**
     * Find Package Version
     */
    protected function findPackageVersion()
    {
        if (!is_null($this->version)) {
            return;
        }
        if ($this->fileSystem->exists(base_path('composer.lock'))) {
            $file = json_decode(
                $this->fileSystem->get(base_path('composer.lock'))
            );
            foreach ($file->packages as $package) {
                if ($package->name == 'freedomcore/trinitycore-character') {
                    $this->version = $package->version;
                    break;
                }
            }
        }
    }
}
