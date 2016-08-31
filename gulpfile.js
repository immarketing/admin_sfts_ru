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
    mix.sass('app.scss');
    mix.copy('bower_components/bootstrap/dist/fonts', 'public/fonts/bootstrap');
    mix.copy('bower_components/font-awesome/fonts', 'public/fonts');

    mix.copy('bower_components/jquery/dist/jquery.js', 'resources/assets/js');
    mix.copy('bower_components/bootstrap/dist/js/bootstrap.js', 'resources/assets/js');

    mix.scripts(['jquery.js'], 'public/js/jquery.js');
    mix.scripts(['bootstrap.js'], 'public/js/bootstrap.js');
    mix.scripts(['app.js'], 'public/js/app.js');
    //mix.scripts(['jquery.js', 'bootstrap.js', 'app.js'], 'public/js/app.js');
    //mix.version(['js/app.js','css/app.css']);

});
