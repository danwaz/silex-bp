require.config({
	baseUrl: '/js/libs',
	paths : {
		app: '../app',
		jquery : 'jquery-2.1.0.min',
		'async' : 'async',
		'domReady' : 'domReady'
	},
	shim : {
		'bootstrap.min' : {
			deps : ['jquery'],
			exports : 'bootstrap'
		}
	}
});

/* Load Modules below */
require(['app/global'], function(){});
