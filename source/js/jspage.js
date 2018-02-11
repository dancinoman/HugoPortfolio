


//Class for description

//Defining global variables
var articleMarkup;
var index;

// blueprint for protfolio
function Description(id, title, article, stats){
	this.id = id;
	this.title = title;
	this.article = article;
	this.statsImage = stats;
}

// Initialize the select element
var options = function(){

	var index = country.length;
	var selection = "";

	selection += "<option disabled=disabled selected='selected'> Choose a country </option>";

	for(i=0; i < index; i++)
	{
		 selection +=	"<option>" + country[i] + "</option>";
	}

	return selection;
}

$("#country-selection").prepend( "<select id='country' name='country' value='this'>"+ options() +"</select>");

//list of article
var articleLeft = "Kunden Force is not only a website, it's a fine and good way to manage queries and requests for customers. How do we do? Innovation and creative background design have pushed us to the limits! " +
									"Many websites do need a fresh and good-looking design, although the needs of managing businesses in an application are real. That's where we come in: customized User Interface just for you!"

var articleMiddle = "Arc-en-ciel de jouets, a tiny store became online. With articles stored in a database, all transactions become faster and easier for your customers." +
										"Nothing less! Reaching people worldwide is enough reason to get yours."

var articleRight = "A personal project that I made for my personal hobby. Roll20 is an RPG table online which players can play together. As a Pro member of this community I've decided to build a character sheet."

portfolioLeft = new Description("1","KUNDEN FORCE", articleLeft, "source/css/range-kudenforce-d.png");
portfolioMiddle = new Description("2", "ARC-EN-CIEL DE JOUETS", articleMiddle, "source/css/range-aec-d.png");
portfolioRight = new Description("3", "ROLL20 CHARACTER SHEET", articleRight, "source/css/range-roll20-d.png");

// List of portfolio
var portfolioArr = [portfolioLeft, portfolioMiddle, portfolioRight];


// Toggling the window for the portfolio description
$("body").on("click", ".btn-flip", function(){
	//making article visible
	$(".flippering-ui").css("visibility", "visible");
 console.log(index);
	console.log($(this).data("portfolio"));
	if(index == $(this).data("portfolio")) {
			$(".flippering-ui").toggle("slow");
	} else {
			$(".flippering-ui").show("slow");
	}

	// The portfolio that was clicked
	index = $(this).data("portfolio");
	var articleMarkup = portfolioArr[index];

	// Initialize mustache
	var articleLayout = $('#desc-template').html();
	var html = Mustache.to_html(articleLayout, articleMarkup);

	$("#display-article").html(html);
});
