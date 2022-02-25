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

mix
    .sass('resources/css/styles.scss', 'public/css')
    .browserSync('localhost:8080')
    .disableNotifications();
<<<<<<< HEAD
=======




>>>>>>> e678cb96175cd300e6530cd9c69fe3da215575c8
