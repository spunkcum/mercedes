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
 	document.getElementById("pageHeader").style.display = "none";

 	lightGallery(document.getElementById('lightgallery')); 

 }
