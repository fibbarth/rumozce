<?php
class FApplication
{
	
	public static function initialise(){
		$doc = FDocument::getConfig();
		$vars = FRoute::parserUrl();
		$vars['components'] = ( $vars['components'] ) ?  $vars['components'] : $doc->get('default');
		$vars['components'].DS.$vars['components'].'.php';
		$task = $vars['task'];
		if( file_exists( 'components'.DS.$vars['components'].DS.$vars['components'].'.php' ) ){
			set_include_path('components'.DS.$vars['components'].DS);
			require_once( $vars['components'].'.php' );
		}else{
			exit('Tarefa não encontrada');
		}
	}

}