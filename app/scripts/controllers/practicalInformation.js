'use strict';

/**
 * @ngdoc function
 * @name mercedesApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the mercedesApp
 */
 angular.module('mercedesApp.praticalInformation', [])
 .controller('PracticalInformationPageController', [PracticalInformationPageController]);

 function PracticalInformationPageController(){
 	document.title = "Mercedes-Benz Classic Car Race - Information";

 	document.getElementById("pageHeader").innerHTML = "Info.";
 	document.getElementById("pageHeader").style.display = "block";
 }