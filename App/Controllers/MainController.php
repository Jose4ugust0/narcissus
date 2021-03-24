<?php

	namespace App\Controllers;

	class MainController
	{
		public function index(){
			\App\Views\MainViews::render('main');
		}
	}



?>