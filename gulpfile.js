var elixir = require('laravel-elixir');

var paths = {
    'jquery': './',
    'bootstrap': './node_modules/bootstrap-sass/assets/',
    'nodemodules': './node_modules/normalize.css/'
}

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
     mix.sass("app.scss", 'public/css/')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .scripts([
            paths.jquery + "all.js",
            paths.bootstrap + "javascripts/bootstrap.js"
        ], 'public/js/app.js', './')
        .styles([paths.nodemodules+"normalize.css"],'public/css/normalize.css');
});
