<?php

	namespace classes\data_base{
	
		//constant that can used
		define("HOST","localhost");
		define("USER", "root");
		define("PASSWORD", "");
	
		//abstract 
		class database{
	
			protected $connection;
			protected $db_selected;	
			protected $sql_query;	
		
			//Construct 
			public function __construct($host, $user, $password){
				
				//tries to connect to db				
				$connection = mysql_connect($host, $user, $password);
					
				if(!$connection){

					echo '<p>Não conseguiu se conectar ao banco de dados, desculpe.</p>';
					echo '<p>Could not connect to data base, sorry.</p>';
					die('<p>' . mysql_error() .'</p>');
				
				}		
					
			}	
			
			//close the connection
			protected function close_db(){

				mysql_close($connection);

			}
	

		}
	
	}

?>
