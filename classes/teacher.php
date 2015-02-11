<?php

	namespace classes{

		final class teacher extends people{

			//Amount of month classes
			private $amount_of_classes;
	
			//get and set method
			public function get_amount_of_classes(){

			  	return $this->amount_of_classes;
			
			}
			public function set_amount_of_classes($amount_of_classes){

				$this->amount_of_classes = $amount_of_classes;
			
			}			

			public function __construct($name, $age, $amount_of_classes){

				parent::__construct($name, $age);

				$this->amount_of_classes = $amount_of_classes;

			}			

		}

	}

?>
