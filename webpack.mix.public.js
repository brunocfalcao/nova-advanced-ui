const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Eduka asset management using Laravel Mix
 |--------------------------------------------------------------------------
 |
 */
mix.copy('resources/js/retina.min.js', 'public/vendor/nova-advanced-ui/js')
   .postCss('resources/css/app.css', 'public/vendor/nova-advanced-ui/css', [
      require("tailwindcss")
   ]);
