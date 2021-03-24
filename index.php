<?php

	
	require('vendor/autoload.php');
	session_start();
	define('PAGES', 'http://192.168.0.106/narcissus.com/pages/');
	define('INCLUDE_PATH', 'http://192.168.0.106/narcissus.com/');
	define('DIR_STYLES', 'http://192.168.0.106/narcissus.com/App/Views/public/');

	//conexão com o banco de dados


	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('BD','narcissus');

	

	$app = new App\Application();
	$app->run();
?>