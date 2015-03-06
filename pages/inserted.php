<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/logins.css">
	<title>Inserido</title>
	
</head>
<body>

	<?php
	
		require "autoload.php";
		use classes\data_base\database;
	
		if($_SESSION['insert'] == "teacher"){

			$name = $_POST['name'];
			$age = $_POST['age'];
			$email = $_POST['email'];
		 	$password = $_POST['password'];
			$rg = $_POST['RG'];
			$component = $_POST['component'];
			$amount = $_POST['amount'];
	
			//Insert in the BD

			//Init the connection with DB
			$insert = new database(HOST, USER, PASSWORD);
			
			//Insert the datas of login
			$insert->create_login(2, $name, $password, $email, $age, $rg);
			
			//Insert the datas of teacher
			$insert->create_teacher($name, $component, $amount);

			echo 'Professor inserido com sucesso';
			
		}
	
	?>

</body>

</html>
