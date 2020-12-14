  $(document).ready(function(){
	$("#full_client").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#full_client");
		/*var nom = $("#fullname").val();
		var email = $("#fullname").val();
		var mdp = $("#fullname").val();*/

		$.ajax({
			method: "POST",
			url: "trait_client.php",
			dataType: "JSON",
			// on va envoyer les donné hmtl sous forme JSON au lieu de html afin de simplifier les choses,
			// 
			data: form.serialize(),
			success: function(reponse)
			{
				if (reponse.msg=="ok") {
					window.location='page_success.php'
					$("#full_client").trigger('reset');
             // si le message retourné par php est egale a "ok" (voir le fichier de traitement trait_register.php) ( qui est inscrit depuis le fichier trait_register)
             // alors le message qui est inscrit dans les parentheses de html va s'executer)
             	}else{
					$("#message").addClass("alert alert-danger").html(reponse.msg);
					// (reponse.msg) ici le mot "reponse" vient du parametre de la fonction "function(),
					// et "msg" c'est le numero de la ligne , genre la clé du tableau (voir le fichier de traitement php)
				}
			},
			error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});

     })

  // ***traitement de la page create_rdv.php

