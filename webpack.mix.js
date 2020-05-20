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

mix.copy('node_modules/popper.js/dist/popper.min.js.map', 'public/js');

mix.sass('resources/sass/frontend.scss', 'public/css')
	.js('resources/js/frontend.js', 'public/js');

mix.sass('resources/sass/backend.scss', 'public/css')
	.js('resources/js/backend.js', 'public/js');