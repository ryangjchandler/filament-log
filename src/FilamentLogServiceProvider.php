<?php

namespace RyanChandler\FilamentLog;

use Filament\PluginServiceProvider;

class FilamentLogServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-log';

    protected array $pages = [
        Logs::class,
    ];
}
