<?php

	namespace classes{

		final class administration extends people{

			private $senior_position;

			//get and set methods
			public function get_senior_position(){

				return $this->senior_position;
	
			}
			public function set_senior_position($senior_position){

				$this->senior_position = $senior_position;
		
			}
	
			//Construct
			public function __construct($name, $age, $senior_position){

				parent::__construct($name, $age);
		
				$this->senior_position = $senior_position;				

			}

		}

	}

?>
