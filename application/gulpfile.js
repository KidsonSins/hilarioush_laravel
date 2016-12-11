var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .styles([
            '../../../../dist/backend/css/animate.css',
            '../../../../dist/backend/css/style.css',
            '../../../../dist/backend/css/colors/default.css'
        ],'../dist/backend/css/hilarioush.css')
        .scripts([
            '../../../../dist/backend/plugins/bower_components/jquery/dist/jquery.min.js',
            '../../../../dist/backend/bootstrap/dist/js/bootstrap.min.js',
            '../../../../dist/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js',
            '../../../../dist/backend/js/jquery.slimscroll.js',
            '../../../../dist/backend/js/waves.js',
            '../../../../dist/backend/js/custom.min.js'
        ],'../dist/backend/js/hilarioush.js')
});
