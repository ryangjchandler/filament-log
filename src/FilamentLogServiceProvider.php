<?php

namespace RyanChandler\FilamentLog;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentLogServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-log';

    protected array $pages = [
        Logs::class,
    ];

    public function packageConfigured(Package $package): void
    {
        $package->hasAssets();
    }
}
