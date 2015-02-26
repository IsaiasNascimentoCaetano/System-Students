<!DOCTYPE html>
<html>

<head>

	<script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>

</head>

<body>

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

		echo 'user connected';

	}
	else{
		
		echo '<script type="text/javascript">

				$(document).ready(function(){

					alert("Usuário ou senha errados");
					windows.location.assign("Login.php");			
	
				});

			</script>';	

		
	}


?>

</body>

</html>

