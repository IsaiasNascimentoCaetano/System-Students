<?php
	
	//init the session
	session_start();

	$name = $_POST['fullname'];
	$password = $_POST['password'];

	//check the login
	require "autoload.php";	

	use classes\data_base\database;

	$login = new database(HOST, USER, PASSWORD);

	//check if user and password is right
	$login_status = $login->login($name, $password);
	$login->close();

	if($login_status){

		echo 'conectadoconectado';

	}


?>
