<?php 
	class FController{
		protected $view;
		
		public function display(){
			$view = str_replace('Controller','View', get_called_class() );
			$this->view = new $view();
			$this->view->display();
		}
		public function getView($prefix, $nameClass ){
			return new $prefix.$nameClass();
		}
		

	}

?>