<?php

	namespace classes\data_base{
	
		//constant that can used
		define("HOST","localhost");
		define("USER", "root");
		define("PASSWORD", "");
	
		//abstract 
		class database{
	
			private $connection;
								
			//Construct 
			public function __construct($host, $user, $password){
								
				//tries to connect to db				
				$this->connection = mysql_connect($host, $user, $password);
							
				if(!$this->connection){

					echo '<p>Não conseguiu se conectar ao banco de dados, desculpe.</p>';
					echo '<p>Could not connect to data base, sorry.</p>';
					die('<p>' . mysql_error() .'</p>');
				
				}		
							
			}	
		
			public function __destruct(){

				//Close the connection
				mysql_close($this->connection);
				
			}

			//login
		 	public function login($name, $password){
                         
                                 mysql_select_db("db_scholl_system", $this->connection);
                                 
                                 $query = sprintf("SELECT id_Type, Full_name, Password FROM Login Where Full_name = '%s' and Password = '%s';",                      
                                 mysql_real_escape_string($name),
                                 mysql_real_escape_string($password));
                                				
                                 $result = mysql_query($query, $this->connection);
                              
				 $data = mysql_fetch_array($result);

                                 if($data['Full_name'] == $name && $data['Password'] == $password){
                                
                                         return true;
                                          
                                 }
                                 else{
                                 
                                         return false;
  
                                 }
 
	                }

			//get the type
			public function get_type($name, $password){

				$query = sprintf("SELECT id_Type FROM Login WHERE Full_name = '%s' and Password = '%s';",
				
				mysql_real_escape_string($name),
				mysql_real_escape_string($password));

				$result = mysql_query($query, $this->connection);
				
				$data = mysql_fetch_array($result);
			
				return $data['id_Type'];

			}

			//Create login
			public function create_login($type, $name, $password, $email, $age, $rg){

				$query = sprintf("INSERT INTO Login(id_Type,Full_name,Password,Email,Age,RG) 
						  VALUES('%s','%s','%s','%s','%s','%s');",

				mysql_real_escape_string($type),
				mysql_real_escape_string("'$name'"),
				mysql_real_escape_string("'$password'"),
				mysql_real_escape_string("'$email'"),
				mysql_real_escape_string($age),
				mysql_real_escape_string("'$rg'"));
			
				mysql_query($query, $this->connection) or die(mysql_error());			

			}

		}
	
	}

?>
