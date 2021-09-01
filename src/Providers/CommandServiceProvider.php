<?php

namespace LidyaPos\PluginManagement\Providers;

use LidyaPos\PluginManagement\Commands\PluginActivateAllCommand;
use LidyaPos\PluginManagement\Commands\PluginActivateCommand;
use LidyaPos\PluginManagement\Commands\PluginAssetsPublishCommand;
use LidyaPos\PluginManagement\Commands\PluginDeactivateCommand;
use LidyaPos\PluginManagement\Commands\PluginRemoveCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PluginAssetsPublishCommand::class,
            ]);
        }

        $this->commands([
            PluginActivateCommand::class,
            PluginDeactivateCommand::class,
            PluginRemoveCommand::class,
            PluginActivateAllCommand::class,
        ]);
    }
}
