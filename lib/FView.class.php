<?php 
class FView
{
	protected  $layout = 'default';
	protected  $model;
	protected  $baseTemplate = 'template';
	protected  $extension = '.php';
	protected  $base_dir;
	protected  $base_url;
	protected  $content;
	public 	    $headers;
	public function __construct()
	{
		// Add content do buffer for attribute content
		$doc = FDocument::getConfig();
		$this->base_dir = $doc->get('base_dir').$this->baseTemplate.DS.$doc->get('template');
		$this->base_url = $doc->get('base').$this->baseTemplate.DS.$doc->get('template').DS;
		$this->title	= $doc->get('title');
	}
	
	public function display(){
		ob_start();
	}
	
	
	public function setLayout( $tpl = 'default' ){
		$this->layout = $tpl.'.php';
	}
	
	/**
	 * Get model of View active
	 */
	public function getModel(){
		if( isset($this->model) ){
			return $this->model;
		}
		$nameModel = str_replace(' View' , 'Model' ,__CLASS__ );
		$this->model = new $nameModel();
	}
	
	public function getTmpl(){
		require_once get_include_path().'views'.DS.'tmpl'.DS.$this->layout.$this->extension;
	}
	public function addStyle( $path ){
		$this->headers[] = '<link href="'.$path.'" rel="stylesheet">';
	}
	
	public function __destruct(){
		$this->content = ob_get_clean();
		$template = $this->base_dir.$this->template.DS.'index.php';
		if( file_exists($template) ){
			require_once( $template );
		}else{
			exit('Template não encontrado. Caminho '.$template);
		}
	}
}
