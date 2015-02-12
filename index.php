<!Doctype html>
<html>

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styleIndex.css">
	<title>System Students</title>

</head>

<body>
	<div id="father">

	<?php

		//Include the header
		include("header.php");

	?>
	
	<!--Menu-->
	<div id="menu">
		<ul id="list" type="none">

			<li><h2><a href=#>Lista de alunos</a><h2></li>
			<li><h2><a href=#>Notas</a><h2></li>
			<li><h2><a href=#>Inserir novos alunos</a><h2></li>
			<li><h2><a href=#>Inserir notas</a><h2></li>
			<li><h2><a href=#>Logar</a><h2></li>		
		</ul>
	</div>

	<!--Information-->
	<div id="information">

		<h1>Informações</h1>
		<p>Este é um teste para sistema escolar</p>		
		<?php
					
			//Just a test
			require __DIR__ . '/autoload.php';	
			
			use classes\student;

			$f = new student("isaias",17,20);
			echo $f->getName();
		
			
		?>
		
	</div>
	
	</div>

</body>

</html>
