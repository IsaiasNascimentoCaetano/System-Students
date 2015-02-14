<?php

	namespace classes\data_base{
	
		//constant that can used
		define("HOST","localhost");
		define("USER", "root");
		define("PASSWORD", "");
	
		//abstract 
		class database{
	
			protected $connection;
	
			//Construct 
			public function __construct($host, $user, $password){
				
				//tries to connect to db				
				$connection = mysql_connect($host, $user, $password);
					
				if(!$connection){

					echo '<p>Não conseguiu se conectar ao banco de dados, desculpe.</p>';
					echo '<p>Could not connect to data base, sorry.</p>';
					echo '<p>' . mysql_error() .'</p>';
				
				}
				else{

					//Creates the db if not exist
					$sql_declaration = 'CREATE DATABASE IF NOT EXISTS SCHOLL_SYSTEM_DB;';
					
					//tries create db
					if(!mysql_query($sql_declaration, $connection)){

						echo '<p>Erro ao tentar cria o banco, desculpe.</p>';
						echo '<p>Error to try create the database, sorry.</p>';		
						echo '<p>' . mysql_error() . '</p>';

					}
					
					
				}			
			
				//delete after
				mysql_close($connection);
		
					
			}	
			
			//close the connection
			public function close_db(){

				mysql_close($connection);

			}
	

		}
	
	}

?>
