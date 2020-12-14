  // *****traitement de la page trait_gestion_avocat.php

  $(document).ready(function(){
	$("#full_avocat").on("submit", function(e){
		e.preventDefault();
		var form = $("#full_avocat");
		

		$.ajax({
			method: "POST",
			url: "trait_gestion_avocat.php",
			dataType: "JSON",
			 
			data: form.serialize(),
			success: function(reponse)
			{
				if (reponse.msg=="ok") {
					$("#messages").removeClass("alert-danger").addClass("alert alert-success").html('l\'enregistrement a été effectué avec succes');
					$("#full_avocat").trigger('reset');
             
             	}else{
					$("#messages").addClass("alert alert-danger").html(reponse.msg);
					
				}
			},
			error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});

     })


