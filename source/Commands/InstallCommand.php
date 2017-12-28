<?php namespace FreedomCore\TrinityCore\Character\Commands;

use FreedomCore\TrinityCore\Character\CharacterServiceProvider;
use FreedomCore\TrinityCore\Character\Traits\Seedable;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

/**
 * Class InstallCommand
 * @package FreedomCore\TrinityCore\Character\Commands
 */
class InstallCommand extends Command
{
    use Seedable;

    /**
     * Path containing database seeds
     * @var string
     */
    protected $seedersPath = __DIR__ . '/../../publishable/database/seeds';

    /**
     * The console command name.
     * @var string
     */
    protected $name = 'character:install';

    /**
     * The console command description.
     * @var string
     */
    protected $description = 'Install Laravel Character Package.';

    /**
     * Fire Installation
     * @return mixed
     */
    public function fire()
    {
        return $this->handle();
    }

    /**
     * Handle Installation
     */
    public function handle()
    {
        $this->info('Publishing package assets, database and configuration files...');
        $this->call('vendor:publish', ['--provider' => CharacterServiceProvider::class]);
        $this->info('Dumping the autoloaded files and reloading all new files');
        (new Process($this->findComposer() . ' dump-autoload -o'))->setWorkingDirectory(base_path())->run();
    }

    /**
     * Find suitable composer executable.
     * @return string
     */
    protected function findComposer() : string
    {
        if (file_exists(getcwd() . '/composer.phar')) {
            return '"' . PHP_BINARY . '" ' . getcwd() . '/composer.phar';
        }
        return 'composer';
    }
}
