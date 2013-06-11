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
    	set_include_path( 'lib'.DS );
    	require $class;
    }
 }
 spl_autoload_register('loadClasses');