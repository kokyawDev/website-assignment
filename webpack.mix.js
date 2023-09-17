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

mix.js('resources/js/app.js', 'public/js/app.js')
    // .js('resources/js/frontend.js', 'public/js/frontend.js')
    // .postCss('resources/css/frontend.css.', 'public/css/frontend.css')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        require("tailwindcss"),
    ]);
