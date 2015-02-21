<?php
	
	namespace classes\peoples{

		final class student extends people{
		
			private $call_Number;

			//get and set method
			public function get_Call_Number(){

				return $this->call_Number;

			}

			public function set_Call_Number($call_Number){

				$this->call_Number = $call_Number;

			}

			public function __construct($name, $age, $call_Number){

				parent::__construct($name, $age);
				
				$this->call_Number = $call_Number;
			
			}			
		}		
	}
?>
