<?php

	namespace App\Models;


	class UsuariosModels
	{
		public static function EmailExists($emailCliente){
			$sql = \App\MySql::conectar()->prepare("SELECT * FROM `tb.cliente_users` WHERE email = ?");
			$sql->execute(array($emailCliente));

			if($sql->rowCount() == 1){
				//email existe
				return true;
			}else{
				return false;
			}
		}
	}


?>