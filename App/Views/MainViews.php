<?php

	namespace App\Views;
	

	Class MainViews
	{
		public static function render($fileName){
			include('pages/'.$fileName.'.php');
			
		}

		public static function renderLogin($fileName){
			include('pages/'.$fileName.'.php');
		}
	}


?>
