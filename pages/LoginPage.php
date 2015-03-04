<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
	<link rel="stylesheet" href="css/logins.css">

	<script type="text/javascript">

		$(document).ready(function(){

			//Change the cursor
			$("#menu").mouseover(function(){
		
				$("#menu").css("cursor","default");

			});

			////////////////////////////////////////////
			//Change color

			//Insert Teacher button
			$("#insertTeachers").mouseover(function(){
				
				$("#insertTeachers").css("color","blue");
				
			});	
			
			$("#insertTeachers").mouseout(function(){
				
				$("#insertTeachers").css("color", "white");
				
			});	

			//Logout button
			$("#logout").mouseover(function(){

				$("#logout").css("color","blue");
			
			});			

			$("#logout").mouseout(function(){

				$("#logout").css("color","white");
		
			});
		
			
			/////////////////////////////////////////
			//Change page
			$("#insertTeachers").click(function(){

				location.href = "insertTeache.php";

			});	
			$("#logout").click(function(){

				location.href = "logout.php";

			});

		});

	</script>

</head>

<body>

<?php

	if(!isset($_COOKIE["name"]) || !isset($_COOKIE["password"])){
					
		$name = $_POST['fullname'];
		$password = $_POST['password'];
			
	}
	else{

		$name = $_COOKIE["name"];
		$password = $_COOKIE["password"];

	}

	require "autoload.php";	

	use classes\data_base\database;

	//init connection to DB
	$login = new database(HOST, USER, PASSWORD);

	//check if user and password is right
	$login_status = $login->login($name, $password);

	//if user not exists
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

		//Create the cookies
			
		setcookie("name",$name,time() + 3600);
		setcookie("password",$password, time() + 3600);
		setcookie("type", $type, time() + 3600);
			
		echo '<div id="father>"';
	
		include("header.php");

		echo '<div id="menu">';

		//See the type
		switch($type){

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
	
		echo '<p id="logout">Deslogar</>';
		
		echo '</div>';

		echo '</div>';

			
	}

?>

</body>

</html>

