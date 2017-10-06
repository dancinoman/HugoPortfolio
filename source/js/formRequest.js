$(document).ready(function(){

	$("#mailto").on("click", function(){
		event.preventDefault();

		var name = $("#name").val();
		var country = $("#country").val();
		var email = $("#email").val();
		var message = $("#message").val();


		var messageBox = $("#message-box");

		if(name == ""){

			messageBox.text("Please enter you name.");

		}
		else if(country == ""){

			messageBox.text("Please select a country.");

		}
		else if(email == ""){

			messageBox.text("Please enter your e-mail.");

		}
		else if(message == ""){

			messageBox.text("Please enter a message");

		}
		else{

			var email_info = {
				name : name,
				country : country,
				email : email,
				message : message
			};

			$.post("source/php/send.php", email_info , function(){
					messageBox.text("Email received. We will response as soon as possible. Thank you!");

			});

			name = country = email = phone = message = "";
		}
	});
});
