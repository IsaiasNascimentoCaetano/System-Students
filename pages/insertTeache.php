<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/logins.css">
	<script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="javascript/insertTeacher.js"></script>
	<title>Inserir professor</title>

</head>

<body>

	<?php include("header.php");?>

	<form id="formTeacher" method="POST" action="">

	<p>Nome: <input type="text" name="name"></p>
	<p>Idade: <input type="text" name="age"></p>
	<p>Email: <input type="text" name="email"></p>
	<p>Senha: <input type="text" name="password"></p>
	<p>RG: <input type="text" name="RG"></p>
	<p>Tipo: <input type="text" name="type"></p>
	
	<br>

	<p>Componente Curricular: <input type="text" name="component"></p>
	<p>Quantidade de aulas: <input type="text" name="amount"></p>
	<p><input type="submit" value="enviar"></p>	

	</form>	

	<br>

       <marquee><p id="footer"><h1>Esta página é apenas para registro de professores!!!</h1><p></marquee>

</body>

</html>
