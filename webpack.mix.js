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

mix.styles([
    'public/css/reset.css',
    'public/css/bootstrap.css',
    'public/css/font-awesome.css',
    'public/css/owl.carousel.css',
    'public/css/jquery.fancybox.css',
    'public/css/flexslider.css',
    'public/css/indent.css',
    'public/rs-plugin/css/settings.css',
    'public/rs-plugin/css/layers.css',
    'public/rs-plugin/css/navigation.css'
], 'public/css/all.css')
    .scripts([

], 'public/js/all.js')