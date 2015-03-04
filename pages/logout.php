<?php

	//delete the cookies
	setcookie("name","",time() - 3600);
	setcookie("password","",time() - 3600);
	setcookie("type","",time() - 3600);
	
	header("Location: Login.php");
	

?>
