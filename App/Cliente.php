<?php

	namespace App;

	Class Cliente
	{
		public static function imagemValida($imagem){
			if($imagem['type'] == 'images/jpeg'||
				$imagem['type'] == 'images/jpg'||
				$imagem['type']== 'images/png'){
					$tamanho = intval($imagem['size']/1024);
					if($tamanho < 300)
						return true;
					else{
						return false;
					}
				}else{
					return false;
				}
		}

		public static function uploadFile($file){
			$formatoArquivo = explode('.',$file['name']);
			$imagemNome = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
			if(move_uploaded_file($file['tmp_name'],'uploads/'.$imagemNome))
				return $imagemNome;
			else
				return false;
		}

		public static function deleteFile($file){
			@unlink('uploads/'.$file);
		}

		public static function CadastrarCliente($nomeCliente,$emailCliente,$senhaCliente){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb.cliente_users` VALUES(NUll,?,?,?)");
			$sql->execute(array($nomeCliente,$emailCliente,$senhaCliente));
		}

		
	}

?>

