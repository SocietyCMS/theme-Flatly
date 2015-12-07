var gulp = require("gulp");
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

var Task = elixir.Task;

elixir.extend("stylistPublish", function() {

    new Task("stylistPublish", function() {
        gulp.src('').pipe(shell('php ../../artisan stylist:publish ' + themeInfo.name));
    })

    .watch('resources/**/*.less')
    .watch('resources/**/*.js');
});


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

elixir(function (mix) {

    /**
     * Compile less
     */
    mix
        .less([
            "app.less"
        ]);


    /**
     * Concat scripts
     */
    mix.browserify("app.js");

    mix.stylistPublish();

    mix.browserSync({
        proxy: "societycms.dev",
        port:   8080
    });

});
