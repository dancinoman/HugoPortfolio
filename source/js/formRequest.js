
$(document).ready(function(){



var messageBox = $("#message-box");

	$("#mailto").on("click", function(){
		event.preventDefault()

		var name = $("#name").val();
		var country = $("#country").val();
		var email = $("#email").val();
		var message = $("#message").val();


		//removes aterix if the users has enter a value
		$(".input-em").val(function(){
			if($(this).val() != ""){

				var id = $(this).attr("id");
				$("#cursor-" + id).text("");
				return $(this).val();

			}
		});


		if(name == ""){
			notice("name", "Please enter your fullname.")

		}
		else if(country == ""){
			notice("country", "Please select a country.")

		}
		else if(email == ""){
			notice("email", "Please enter your e-mail.")

		}
		else if(message == ""){
			notice("message", "Please enter a message.")

		}
		else{

			var email_info = {
				name : name,
				country : country,
				email : email,
				message : message
			};

			$.post("source/php/send.php", email_info , function(){
					messageBox.css("visibility", "visible");
					messageBox.html("<p>Email received. We will response as soon as possible.<br/> Thank you!</p>");

			});

			//reset th form
			$(".input-em").val("");
		}

	});

	//blueprint for notices
	function notice(notice_name, notice_message){

		$("#cursor-" + notice_name).text("*");

		$("#notice-holder").text(notice_message);

	}

});
