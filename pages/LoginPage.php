<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>

</head>

<body>

<?php
	
	//init the session
	session_start();

	$name = $_POST['fullname'];
	$password = $_POST['password'];

	$_SESSION['name'] = $name;
	$_SESSION['password'] = $password;
	
	require "autoload.php";	

	use classes\data_base\database;

	//init connection to DB
	$login = new database(HOST, USER, PASSWORD);

	//check if user and password is right
	$login_status = $login->login($name, $password);

	if(!$login_status){

		echo '<script type="text/javascript">

				$(document).ready(function(){

					alert("Usuário ou senha errados.\nTente novamente.");
					location.href = "Login.php";			
	
				});

			</script>';
		
	}
	else{

		//get the type
		$type = $login->get_type($name, $password);
		$_SESSION['type'] = $type;

		echo $type;
	
	}

?>

</body>

</html>

