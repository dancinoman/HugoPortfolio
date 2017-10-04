$(document).ready(function(){

	$("#mailto").on("click", function(){
		event.preventDefault();

		var name = $("#name").val();
		var country = $("#country").val();
		var mail = $("#mail").val();
		var phone = $("#phone").val();
		var message = $("#message").val();



		var messageBox = $("#message-box");

		if(name == ""){

			messageBox.text("Please enter you name.");

		}
		else if(country == ""){

			messageBox.text("Please select a country.");

		}
		else if(mail == ""){
			console.log(mail);
			messageBox.text("Please enter your e-mail.");

		}
		else if(phone = ""){

			messageBox.text("Please enter your phone number.");

		}
		else if(message = ""){

			messageBox.text("Please enter a message");

		}
	})
});
