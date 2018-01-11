
$(document).ready(function(){



var messageBox = $("#message-box");

	$("#mailto").on("click", function(){
		event.preventDefault()

		var name = $("#name");
		var country = $("#country");
		var email = $("#email");
		var message = $("#message");


		//removes the class alert if user has put a value
		$(".input-em").val(function(){
			if($(this).val() != ""){

				$(this).siblings("label").addClass("text-light");

				$(this).siblings("label").removeClass("alert");
				return $(this).val();

			}
		});

		country.val(function(){
			if($(this).val() != null){

				$(this).parent().siblings("label").addClass("text-light");
				$(this).parent().siblings("label").removeClass("alert");
				return $(this).val();
			}

		});


		if(name.val() == ""){
			notice(name, "Please enter your fullname.");

		}
		else if(country.val() == null){

			country.parent().siblings("label").addClass("alert");
			country.parent().siblings("label").removeClass("text-light");
			$("#notice-holder").text("Please choose your country.");

		}
		else if(email.val() == ""){
			notice(email, "Please enter your e-mail.");

		}
		else if(message.val() == ""){
			notice(message, "Please enter a message.");

		}
		else{

			var email_info = {
				name : name.val(),
				country : country.val(),
				email : email.val(),
				message : message.val()

			};

			$.post("source/php/send.php", email_info, function(){
				messageBox.css("visibility", "visible");

				messageBox.html("<p>Email received. We will response as soon as possible.<br/> Thank you!</p>");
			});

			//reset th form
			$(".input-em").val("");
		}

	});

	//blueprint function for puting an alert if user does'nt fullfill an input
	function notice(idInput, notice_message){


		idInput.siblings("label").removeClass("text-light");

		idInput.siblings("label").addClass("alert");


		$("#notice-holder").text(notice_message);

	}

});
