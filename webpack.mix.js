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
    'public/js/jquery.min.js',
    'public/js/jquery-ui.min.js',
    'public/js/bootstrap.js',
    'public/js/owl.carousel.js',
    'public/js/jquery.sticky.js',
    'public/js/TweenMax.min.js',
    'public/js/cws_parallax.js',
    'public/js/jquery.fancybox.pack.js',
    'public/js/jquery.fancybox-media.js',
    'public/js/isotope.pkgd.min.js',
    'public/js/imagesloaded.pkgd.min.js',
    'public/js/masonry.pkgd.min.js',
    'public/js/jquery.validate.min.js',
    'public/js/jquery.form.min.js',
    'public/js/script.js',
    'public/js/bg-video/cws_self_vimeo_bg.js',
    'public/js/bg-video/jquery.vimeo.api.min.js',
    'public/js/bg-video/cws_YT_bg.js',
    'public/js/jquery.tweet.js',
    'public/js/jquery.scrollTo.min.js',
    'public/js/jquery.flexslider.js',
    'public/js/retina.min.js',
], 'public/js/all.js')
    .scripts([
    'public/rs-plugin/js/jquery.themepunch.tools.min.js',
    'public/rs-plugin/js/jquery.themepunch.revolution.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.slideanims.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.navigation.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.parallax.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.video.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.actions.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.kenburn.min.js',
    'public/rs-plugin/js/extensions/revolution.extension.migration.min.js',
], 'public/js/plugin.js')
    .sass('resources/assets/sass/main.scss', 'public/css');