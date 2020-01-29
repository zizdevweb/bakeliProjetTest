const mix = require('laravel-mix');

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

mix.js([
    "resources/js/app.js",
    "resources/js/bootstrap.bundle.min.js",
    "resources/js/bootstrap.js", 
    "resources/js/Chart.min.js", 
    "resources/js/jquery.min.js", 
    "resources/js/jquery-ui.min.js", 
    "resources/js/tempusdominus-bootstrap-4.min.js" ], 
"public/js")
    .sass("resources/sass/app.scss", "public/css")
    .styles([
        "resources/css/icheck-bootstrap.min.css", 
        "resources/css/OverlayScrollbars.min.css",
        "resources/css/summernote-bs4.css",
        "resources/css/tempusdominus-bootstrap-4.min.css"
       ],
        "public/css/all.css");
