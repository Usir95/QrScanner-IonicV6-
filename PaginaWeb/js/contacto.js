
$(document).ready(function() {
 $('#enviar').click(function(){
	 var url = "datos.php";                                      

	 $.ajax({                        
		 type: "POST",                 
		 url: url,                    
		 data: $("#formulario").serialize(),
		 success: function(data)            
		 {
			$('#resp').html(data);           
		 }
		});
	 });
});