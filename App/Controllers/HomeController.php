<?php
	
	namespace App\Controllers;
	


	class HomeController
	{
		public function index(){
			if(isset($_SESSION['login'])){
				\App\Views\MainViews::render('home');
			}else{
				if(isset($_POST['entrar'])){
					$email = $_POST['email'];
					$senha = $_POST['senha'];

					$ver = \App\MySql::conectar()->prepare("SELECT * FROM `tb.cliente_users` WHERE email = ?");
					$ver->execute(array($email));

					/*if($ver->rowCount() == 1){
						$info = $ver->fetch();

						$_SESSION['login'] = true;
						$_SESSION['nome'] = $info['nome'];
						$_SESSION['email'] = $email;
						$_SESSION['senha'] = $senha;

						header('location: '.INCLUDE_PATH);
						die();
					}*/

					if ($ver->rowCount() == 1) {
						$data1 = $ver->fetch();
						$senhadb = $data1['senha'];
						if(\App\Bcrypt::check($senha,$senhadb)){
							$_SESSION['login'] = $data1['email'];
							$_SESSION['email'] = $data1['email'];
							$_SESSION['nome'] = $data1['nome'];
							header('location: '.INCLUDE_PATH);
							die();
						}
					}

					$emailSalao = $_POST['email'];
					$senhaSalao = $_POST['senha'];

					$ver2 = \App\MySql::conectar()->prepare("SELECT * FROM `tb.salao_users` WHERE email = ?");
					$ver2->execute(array($emailSalao));

					if($ver2->rowCount() == 1){
						$data2 = $ver2->fetch();
						$senhabd = $data2['senha'];

						if(\App\Bcrypt::check($senhaSalao,$senhabd)){
							$_SESSION['login'] = $data2['email'];
							$_SESSION['email'] = $data2['email'];
							$_SESSION['nome'] = $data2['nome'];
							header('location: '.INCLUDE_PATH);
							die();
						}
					}
				}


				\App\Views\MainViews::renderLogin('login');
			}
		}
	}

?>