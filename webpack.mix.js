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

mix.copy('resources/js/retina.min.js', 'public/vendor/nova-advanced-ui/js')
   .postCss('resources/css/app.css', 'public/vendor/nova-advanced-ui/css', [
      require("tailwindcss")
   ]);
