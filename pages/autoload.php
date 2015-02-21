<?php
	
	function load_classes($class){
		
		$name_class = __DIR__ . "/" . str_replace("\\", "/", $class) . '.php';
				
		require $name_class;

	}

	spl_autoload_register('load_classes');

?>
