<!Doctype html>
<html>

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="pages/css/styleIndex.css">
	<title>System Students</title>

</head>

<body>
	<div id="father">
	
	<header>

  		<img src="pages/images/Logo.png" id="logo"/>
		<img src="pages/images/Arms.png" id="arms"/>

 	</header>
	
	<!--Menu-->
	<div id="menu">
		<ul id="list" type="none">

			<li><h2><a href="pages/Login.php">Logar</a><h2></li>
			<li><h2><a href=#>Notas</a><h2></li>
			<li><h2><a href=#>Inserir novos alunos</a><h2></li>
			<li><h2><a href=#>Inserir notas</a><h2></li>
			<li><h2><a href=#>Lista de alunos</a><h2></li>		
		</ul>
	</div>

	<!--Information-->
	<div id="information">

		<h1>Informações</h1>
		<p>Este é um teste para sistema escolar</p>		
		<?php
					
			//Just a test
			require __DIR__ . '/pages/autoload.php';	
			
			use classes\peoples\student;
			use classes\peoples\teacher;
			use classes\data_base\database;
		
			$f = new student("isaias",17,20);
			echo $f->getName();
			echo $f->getAge();

			$d = new teacher("tiago", 39, 10);
			echo $d->getName();
			
			$e = new database(HOST, USER, PASSWORD);
		            		
		?>
		
	</div>
	
	</div>

</body>

</html>
