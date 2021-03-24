<?php

	namespace App;

	class Util
	{
		public static function Redirect($url){
			echo '<script>window.location.href="'.$url.'"</script>';
			die();
		}

		public static function Alert($mensagem){
			echo '<script>alert("'.$mensagem.'")</script>';
		}
	}


?>