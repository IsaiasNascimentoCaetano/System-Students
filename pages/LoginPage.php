<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
	<link rel="stylesheet" href="css/logins.css">

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

		echo '<div id="father>"';
	
		include("header.php");

		echo '<div id="menu">';

		//See the type
		switch($_SESSION['type']){

			case 1:
				echo '<p id="insertNotes">Inserir notas</p>';
				echo '<p id="insertTeachers">Inserir professor</p>';
				echo '<p id="insertStudent">Inserir alunos</p>';
				echo '<p id="insertNotes">Inserir notas</p>';
				echo '<p id="insertCurricular>"Inserir matéria</p>';
				echo '<p id="seeListStudent">Lista de alunos</p>';
				echo '<p id="modifiesContent">Modificar conteúdo</p>';
				break;					

			case 2:
				echo '<p id="seeListStudent">Lista de alunos</p>';
				echo '<p id="insertNotes">Inserir notas</p>';
				break;
			
			case 3:
				echo '<p id="seeNotes">Ver notas</p>';
				echo '<p id="seeListStudent">Lista de alunos';
				break;				

		}

		echo '</div>';

		echo '</div>';

			
	}

?>

</body>

</html>

