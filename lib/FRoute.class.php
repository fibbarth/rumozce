<?php
class FRoute{
	public static function buildUrl( $url ){
	
	}
	
	public static function parserUrl(){
		$doc     = FDocument::getConfig();
		$urlBase = $doc->get('base');
		$url     = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$url     = str_replace($urlBase, '', $url);
		$vars 	 = explode( '/', $url );
		if( is_array($vars) ){
			$v['components'] = $vars[0];
			$v['task'] 		 = $vars[1];
		}
		return $v;
	}
}