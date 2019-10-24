const mix = require('laravel-mix');

mix
    .setPublicPath('docs')
    .setResourceRoot('resources')
    .sass('resources/sass/bootstrap.scss', 'docs/css')
    .sourceMaps(true)
    .options({
        processCssUrls: false
    });
