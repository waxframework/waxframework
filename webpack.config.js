const path = require('path');
const defaultConfig = require('@wordpress/scripts/config/webpack.config');

const devHost = 'waxframework.test';

module.exports = {
	...defaultConfig,
	entry: {
		'js/app.js': './resources/js/app.js',
		'css/app.css': './resources/sass/app.scss',
	},
	output: {
		path: path.resolve(__dirname, './assets/'),
		filename: '[name]',
		clean: false,
	},
	devServer: {
		devMiddleware: {
			writeToDisk: true,
		},
		allowedHosts: 'auto',
		port: 8887,
		host: devHost,
		proxy: {
			'/assets': {
				pathRewrite: {
					'^/assets': '',
				},
			},
		},
		headers: { 'Access-Control-Allow-Origin': '*' },
	},
};
