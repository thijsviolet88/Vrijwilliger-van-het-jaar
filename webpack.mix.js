let mix = require('laravel-mix');

mix.js('themes/site/src/js/app.js', 'themes/site/dist/js').vue();
mix.sass('themes/site/src/sass/main.scss', 'themes/site/dist/css/main.css').sourceMaps();