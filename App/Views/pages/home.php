<?php

	if(isset($_GET['loggout'])){
		session_destroy();
		header('Location: '.INCLUDE_PATH);
		die();
	}

?>

<a href="?loggout">sair</a>