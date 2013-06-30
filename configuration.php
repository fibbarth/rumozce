<?php
class FConfig
{
	private $dbUser    = '';
	private $dbPass    = '';
	private $dbHost    = 'localhost';
	private $base_dir  = '/var/www/rumo/';
	private $base	    = 'http://127.0.1.1/rumo/';
	private $email     = 'fibbarth@gmail.com';
	private $template  = 'bootstrap';
	private $title	    = 'Rumo a certificação PHP';
	private $default   = 'login';
	
	public function get( $name ){
		return $this->$name;
	}
}
