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

mix
.js('resources/js/app.js', 'public/assets/js/main.js')
.ts('resources/ts/app.ts', 'public/assets/js/main.js')

//.postCss('resources/css/app.css', 'public/assets/css/main.css', [
//	require('tailwindcss'),
//])
.sass('resources/sass/app.scss', 'public/assets/css/main.css', {}, [
	require('tailwindcss'),
])

.vue({ version: 3 })
.extract()
.sourceMaps()
.browserSync('catalog-laravel.loc')
.disableNotifications()
;