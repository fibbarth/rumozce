<?php 
class FConfig
{
	private $dbUser    = 'root';
	private $dbPass    = 'nicole2904';
	private $dbHost    = 'localhost';
	private $base_dir  = '/var/www/rumo/';
	private $base	   = 'http://127.0.1.1/rumo/';
	private $email     = 'fibbarth@gmail.com';
	
	public function get( $name ){
		return $this->$name;
	}
}
