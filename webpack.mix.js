const mix = require('laravel-mix')

mix
    .postCss('resources/css/filament-log.css', 'css/filament-log.css', [
        require('tailwindcss')
    ])
    .setPublicPath('resources/dist')
