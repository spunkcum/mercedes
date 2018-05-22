'use strict';

/**
 * @ngdoc function
 * @name mercedesApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the mercedesApp
 */
 angular.module('mercedesApp.program', [])
 .controller('ProgramPageController', [ProgramPageController]);

 function ProgramPageController(){
 	document.title = "Mercedes-Benz Classic Car Race - Program";
 	document.getElementById("pageHeader").innerHTML = "Program.";
 	document.getElementById("pageHeader").style.display = "block";
 }