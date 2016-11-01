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
    mix.copy('bower_components/font-awesome/css/font-awesome.css', 'public/css/');

    mix.copy('bower_components/jquery/dist/jquery.js', 'resources/assets/js');

    mix.copy('bower_components/bootstrap/dist/js/bootstrap.js', 'resources/assets/js');
    mix.copy('bower_components/bootstrap/dist/css/bootstrap.css', 'public/css/');
    mix.copy('bower_components/bootstrap/dist/css/bootstrap-theme.css', 'public/css/');

    mix.copy('bower_components/jquery.bootgrid/dist/jquery.bootgrid.js', 'public/js/');
    mix.copy('bower_components/jquery.bootgrid/dist/jquery.bootgrid.fa.js', 'public/js/');
    mix.copy('bower_components/jquery.bootgrid/dist/jquery.bootgrid.css', 'public/css/');

    //mix.copy('bower_components/jquery-ui/themes/base/jquery-ui.css', 'public/css/');
    //mix.copy('bower_components/jquery-ui/themes/base/images/*.*', 'public/css/images/');
    //mix.copy('bower_components/jquery-ui', 'public/jquery-ui');

    mix.scripts(['jquery.js'], 'public/js/jquery.js');
    mix.scripts(['bootstrap.js'], 'public/js/bootstrap.js');
    mix.scripts(['agmodal.js','app.js'], 'public/js/app.js');
    mix.scripts(['apppplgroup.js'], 'public/js/apppplgroup.js');
    //mix.scripts(['jquery.js', 'bootstrap.js', 'app.js'], 'public/js/app.js');
    //mix.version(['js/app.js','css/app.css']);

});
