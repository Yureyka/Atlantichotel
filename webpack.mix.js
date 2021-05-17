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
    .sass('resources/sass/index.scss', 'public/css', {})
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/reservation.scss', 'public/css')
    .sass('resources/sass/gallery.scss', 'public/css')
    .sass('resources/sass/details.scss', 'public/css')
    .sass('resources/sass/apartments.scss', 'public/css')
    .sass('resources/sass/contacts.scss', 'public/css')
    .sass('resources/sass/receipt.scss', 'public/css');