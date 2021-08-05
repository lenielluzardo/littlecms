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
// mix.js('resources/js/admin-app/index.js', 'public/js/admin')
mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/modal.js', 'public/js');

//    mix.react();

mix.less('resources/less/web/index.less', 'public/css')
   .less('resources/less/admin/index.less', 'public/css/admin');

mix.copy('resources/less/common/all.css', 'public/css')
    .copyDirectory('resources/assets/images', 'public/assets/images')
    .copyDirectory('resources/assets/icons', 'public/assets/icons')
    .copyDirectory('resources/assets/webfonts', 'public/assets/webfonts');

mix.minify('public/css/index.css');
mix.minify('public/css/admin/index.css');
