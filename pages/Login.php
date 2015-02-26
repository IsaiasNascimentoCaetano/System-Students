<?php 

	require __DIR__ . '/autoload.php';
	
?>
<html lang="pt-br">

	<head>
	
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/styleLogin.css">
		<title>Login</title>
		<script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="javascript/login_script.js"></script>

	</head>
	<body>

		<div id="father">
		
			<?php 
							
				include("header.php");
				
			?>				

			<!--Login box-->
			<div id="loginBox">
	
				<h1>Login</h1>							
				<div id="box">
			
					<form method="POST" action="LoginPage.php">
						
						<p>Nome completo:</p><input type="text" name="fullname" value="coloque seu nome" id="name">		 		
		                                <p> Senha:</p><input type="password" name="password">
						<p><input type="submit" value="Logar" id="submit"></p>			

					</form>	
					
				</div>

			<div>

		</div>			

	</body>

</html>
