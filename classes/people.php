<?php

	namespace classes{

		abstract class people{
 			

			//atributes
			protected $name;
			protected $age;
			protected $id;//number of register in  the database
			
			//Get and set methods
			public function getName(){
			
				return $this->name;

			}

			public function setName($name){

				$this->name = $name;
	
			}
			public function getAge(){

				return $this->age;

			}	
			public function setAge($age){

				$this->age = $age;
		
			}		
			public function getId(){

				return $this->id;

			}
			public function setId($id){

				$this->id = $id;	

			}			
		
			//Construct
			public function __construct($name, $age){
				
				$this->name = $name;
				$this->age = $age;

			}
	

		}

	}

?>
