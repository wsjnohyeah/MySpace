<?php

/*
 * Return A custom URL according to current root directory from changing.
 * Change the root directory value when switching servers.
 */
function makeUrl($route){
	$rootDir = 'http://ethanhu.me/';
	return $rootDir.$route;
	//192.168.31.207
}