var options = function(){

	var index = country.length;
	var selection = "";

	for(i=0; i < index; i++)
	{
		 selection +=	"<option>" + country[i] + "</option>";
	}

	return selection;
}

$("#country-selection").prepend( "<select id='country' name='country'>"+ options() +"</select>");
