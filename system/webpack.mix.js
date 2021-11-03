const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
mix.js('vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js', 'public/js')

mix.postCss('resources/css/app.css', 'public/css')
mix.postCss('vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css', 'public/css')
mix.postCss('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/css/fontawesome')
mix.postCss('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css')

mix.browserSync({ proxy: "http://localhost:8001" });