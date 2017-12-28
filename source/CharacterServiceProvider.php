<?php namespace FreedomCore\TrinityCore\Character;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use \FreedomCore\TrinityCore\Character\Facades\Character as CharacterFacade;

/**
 * Class CharacterServiceProvider
 * @package FreedomCore\TrinityCore\Character
 */
class CharacterServiceProvider extends ServiceProvider
{

    /**
     * Register Service Provider
     */
    public function register()
    {
        (AliasLoader::getInstance())->alias('Character', CharacterFacade::class);
        $this->app->singleton('character', function () {
            return new Character();
        });
        $this->loadHelpers();
        $this->registerConfigs();
        if ($this->app->runningInConsole()) {
            $this->registerPublishableResources();
            $this->registerConsoleCommands();
        }
        if (!$this->app->runningInConsole() || config('app.env') == 'testing') {
            $this->registerAppCommands();
        }
    }

    /**
     * Bootstrap the application events.
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Load helpers.
     */
    protected function loadHelpers()
    {
        foreach (glob(__DIR__.'/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }

    /**
     * Register the publishable files.
     */
    private function registerPublishableResources()
    {
        $publishablePath = dirname(__DIR__) . '/publishable';
        $publishable = [
            'migrations' => [
                "{$publishablePath}/database/migrations/" => database_path('migrations'),
            ],
            'seeds' => [
                "{$publishablePath}/database/seeds/" => database_path('seeds'),
            ],
            'config' => [
                "{$publishablePath}/config/character.php" => config_path('character.php'),
            ]
        ];
        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }

    /**
     * Register Configuration Files
     */
    public function registerConfigs()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/publishable/config/character.php',
            'character'
        );
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(Commands\InstallCommand::class);
        $this->commands(Commands\LoadGearSets::class);
    }

    /**
     * Register the commands accessible from the App.
     */
    private function registerAppCommands()
    {
    }
}
