$(document).ready(function(){

	var clicked = false;
		
		$("#name").click(function(){
			
			if(!clicked){
				
				$("#name").val("");
				clicked = true;			

			}		

		});
	
});

