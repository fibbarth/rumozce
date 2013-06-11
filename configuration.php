<?php 
class FConfig
{
	private $dbUser    = '';
	private $dbPass    = '';
	private $dbHost    = 'localhost';
	private $base_dir  = '/var/www/rumo/';
	private $base	   = '';
	private $email     = 'fibbarth@gmail.com';
	
	public function get( $name ){
		return $this->$name;
	}
}
