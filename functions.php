<?php
/*
* defined function responsible for loading class,
* replacing the old __ autoload.
* ROOT is constant of the path root of the system
*/
 function loadClasses($className)
 {
 	$class = 'lib'.DS.$className.'.class.php';
 	if( file_exists( $class ) ){
 		require_once $class;
 	}else{
	 	
	 	$aux = strtolower( $className );
	 	if( strpos($aux,'controller') !== false ){
	 		require_once( get_include_path().DS.'controller.php' );
	 	}else if( strpos($aux,'view') !== false ){
	 		require_once( get_include_path().'views'.DS.'view.html.php');
	 	}
 	}
 }
 spl_autoload_register('loadClasses');