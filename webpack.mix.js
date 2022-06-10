const mix = require('laravel-mix');
require('@chiiya/laravel-mix-image-minimizer');

/**
 *|--------------------------------------------------------------------------
 *| Mix Asset Management
 *|--------------------------------------------------------------------------
 *|
 *| Mix provides a clean, fluent API for defining some Webpack build steps
 *| for your Laravel application. By default, we are compiling the Sass
 *| file for the application as well as bundling up all the JS files.
 *|
 */

mix
.js('resources/js/app.js', 'public/assets/js/main.js')
.ts('resources/ts/app.ts', 'public/assets/js/main.js')

.css('resources/css/app.css', 'public/assets/css/main.css')
.sass('resources/sass/app.scss', 'public/assets/css/main.css', {}, [
	require('tailwindcss'),
])

.images({
	implementation: 'squoosh',
	patterns: [{
		from: "resources/images",
		to: "assets/images",
	}],
	webp: true,
	webpOptions: {
		encodeOptions: {
			webp: { quality: 90 },
			avif: { quality: 90 }
		}
	},
})

.vue({ version: 3 })
.extract()
.sourceMaps()


.browserSync('catalog-laravel.loc') // Automatic loader in browser
.disableNotifications() // Disable notifications
;