<?php
	// Show errors
    error_reporting(E_ALL);
    ini_set('display_errors','1');
    
    // Definition for avoid access direct
    define('FEXEC', 1);
	define('DS', DIRECTORY_SEPARATOR);
 	require_once 'configuration.php';
	require_once 'functions.php';
 	
 	$doc = FDocument::getConfig();
 	echo $doc->get('dbUser');