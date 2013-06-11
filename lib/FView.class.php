<?php 
class FView
{
	/**
	 * Get model of View active
	 */
	public function getModel(){
		str_replace(' View' , 'Model' ,__CLASS__ );
	}
	
	public function display(){
		ob_start();
	}
	
	public function __destruct(){
		// Add content do buffer for attribute content
		$doc = FDocument::getConfig();
		$this->content = ob_get_clean();
		require_once( $doc->get('template') );
	}
}
