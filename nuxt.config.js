export default {
	server: {
		port: process.env.APP_PORT,
		host: process.env.APP_HOST,
	},
	head: {
		title: 'Ateliertextile',
		htmlAttrs: {
			lang: 'en',
		},
		meta: [
			{ charset: 'utf-8' },
			{ name: 'viewport', content: 'width=device-width, initial-scale=1' },
			{ hid: 'description', name: 'description', content: '' },
			{ name: 'format-detection', content: 'telephone=no' },
		],
		link: [
			{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
		],
	},
	css: [
		'@/assets/style/main.scss',
	],
	plugins: [],
	components: true,
	buildModules: [
		'@nuxtjs/eslint-module',
	],
	modules: [
		'@nuxtjs/axios',
	],
	axios: {
		baseURL: '/',
	},
	build: {},
};
