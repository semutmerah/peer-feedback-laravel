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
	mix.sass('custom.scss');
		mix.copy('node_modules/uikit/dist/js/uikit.js', 'resources/assets/js/uikit.js');
		mix.copy('node_modules/uikit/vendor/jquery.js', 'resources/assets/js/jquery.js');
		mix.copy('node_modules/uikit/dist/js/components/slideshow.js', 'resources/assets/js/slideshow.js');
		mix.copy('node_modules/uikit/dist/js/components/slideshow-fx.js', 'resources/assets/js/slideshow-fx.js');
		mix.copy('resources/assets/images', 'public/images')
		mix.scripts([
			'jquery.js',
			'uikit.js',
			'slideshow.js',
			'slideshow-fx.js'
		]);
		mix.scripts('custom.js');
		mix.copy('node_modules/uikit/dist/fonts', 'public/fonts');
	mix.version(['css/app.css', 'css/custom.css', 'js/all.js', 'js/custom.js']);
});
