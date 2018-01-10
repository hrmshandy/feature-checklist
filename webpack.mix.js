let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/sdk.js', 'dist/feature-checklist/js')
    .sass('resources/assets/sass/style.scss', 'dist/feature-checklist/css')
    .copyDirectory('dist/feature-checklist', '../public/vendor/feature-checklist')
