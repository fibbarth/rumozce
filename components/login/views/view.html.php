<?php 
class RumoViewLogin extends FView
{
	public function __construct(){
		$this->addStyle(FDocument::getConfig()->get('base').'components'.DS.'login'.DS.'css'.DS.'login.css');
		parent::__construct();
	}
}

?>