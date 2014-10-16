require.config({
	baseUrl: '/js/libs',
	paths : {
		app: '../app',
		jquery : 'jquery-1.11.1.min',
		'async' : 'async'
	}
});

/* Load Modules below */
require(['app/global'], function(){});
