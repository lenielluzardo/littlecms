const mix = require('laravel-mix');

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
mix.options({
    processCssUrls: false
});
mix.js('resources/js/app.js', 'public/js')
    .less('resources/less/index.less', 'public/css')
    .copy('resources/less/common/all.css', 'public/css')
    .copyDirectory('resources/assets/images', 'public/assets/images')
    .copyDirectory('resources/assets/icons', 'public/assets/icons')
    .copyDirectory('resources/assets/webfonts', 'public/assets/webfonts')
    .minify('public/css/index.css');
