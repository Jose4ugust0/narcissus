<?php

	namespace App;

	Class Application
	{
		private $controller;

		private function setApp(){
			$loadName = 'App\Controllers\\';
			$url = explode('/',@$_GET['url']);

			if ($url[0] == '') {
				$loadName.= 'Main';
			}else{
				$loadName.= ucfirst(strtolower($url[0]));
			}

			$loadName.= 'Controller';

			if (file_exists($loadName.'.php')) {
				$this->controller = new $loadName();
			}else{
				die('Pagina Solicitada inexistente');
			}
		}

		public function run(){
			$this->setApp();
			$this->controller->index();
		}
	}




?>