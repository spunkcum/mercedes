'use strict';

/**
* @ngdoc overview
* @name mercedesApp
* @description
* # mercedesApp
*
* Main module of the application.
*/
angular
.module('mercedesApp', [
	'mercedesApp.homePage',

	'ngAnimate',
	'ngAria',
	'ngCookies',
	'ngMessages',
	'ngResource',
	'ngRoute',
	'ngSanitize',
	'ngTouch'
])
.config(function ($routeProvider) {
	$routeProvider
	.when('/ejnerhessel', {
		templateUrl: 'views/main.html',
		controller: 'HomePageController',
		controllerAs: 'homePage'
	})
	/*.when('/pchristensen', {
		templateUrl: 'views/main.html',
		controller: 'MainCtrl',
		controllerAs: 'main'
	})
	.when('/bentpedersen', {
		templateUrl: 'views/main.html',
		controller: 'MainCtrl',
		controllerAs: 'main'
	})
	.when('/mercedesbenzcph', {
		templateUrl: 'views/main.html',
		controller: 'MainCtrl',
		controllerAs: 'main'
	})
	.when('/mercedesbenzdanmark', {
		templateUrl: 'views/main.html',
		controller: 'MainCtrl',
		controllerAs: 'main'
	})
	.when('/viborgautogaard', {
		templateUrl: 'views/main.html',
		controller: 'MainCtrl',
		controllerAs: 'main'
	})*/
	.otherwise({
		redirectTo: '/ejnerhessel'
	});
});
