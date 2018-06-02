'use strict';

/**
 * @ngdoc function
 * @name mercedesApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the mercedesApp
 */
 angular.module('mercedesApp.gallery', [])
 .controller('GalleryController', [GalleryController]);

 function GalleryController(){
 	document.title = "Mercedes-Benz Classic Car Race - Galleri";
 	document.getElementById("pageHeader").innerHTML = "Tak for sidst.";
 	document.getElementById("pageHeader").style.display = "block";

 	lightGallery(document.getElementById('lightgallery')); 

 }
