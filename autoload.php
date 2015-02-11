<?php

	function __autoload($class){

		if(file_exists($class . ".php")){

			include_once $class . ".php"; 

		}
		else{

			echo "<p>No have class " .$class.".php</p>";

		}	

	}

?>
