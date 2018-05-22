'use strict';

/**
 * @ngdoc function
 * @name mercedesApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the mercedesApp
 */
 angular.module('mercedesApp.mapOverview', [])
 .controller('MapOverviewPageController', [MapOverviewPageController]);

 function MapOverviewPageController(){
 	document.title = "Mercedes-Benz Classic Car Race - Oversigt";
 	document.getElementById("pageHeader").innerHTML = "Oversigts Kort.";
 	document.getElementById("pageHeader").style.display = "block";
 }