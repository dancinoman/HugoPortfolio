// class for description

//defining the exporting value to mustache template
var articleMarkup;

// blueprint for protfolio
function Description(id, title, article, stats){
	this.id = id;
	this.title = title;
	this.article = article;
	this.statsImage = stats;
}

//to initialize the select element
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

//list of article
var articleLeft = "Kunden Force is not only a website, it's a fine and good way to manage queries and requests for customers. How do we do? Inovation and creative background design has pushed us to the limits! " +
									"Many websites does need a fresh and good-looking design, altough the needs of managing businesses in an application is real. That's where we come in: costumized User Interface just for you!"

var articleMiddle = "Arc-en-ciel de jouets, a tiny store became online. With articles stored in database, all transactions become faster and easier for your customers." +
										"Nothing less! Reaching people world wide is enough reason to get yours."

portfolioLeft = new Description("portfolioLeft","KUNDEN FORCE", articleLeft, "source/css/range-kudenforce-d.png");
portfolioMiddle = new Description("portfolioMiddle", "ARC-EN-CIEL DE JOUETS", articleMiddle, "source/css/range-aec-d.png");

//list of portfolio
var portfolioArr = [portfolioLeft, portfolioMiddle];


//toggling the window for the portfolio description
$("body").on("click", ".btn-flip", function(){
	//making article visible
	$(".flippering-ui").show("slow");
	$(".flippering-ui").css("visibility", "visible");

	//the portfolio that was clicked
	var portSelect = $(this).data("portfolio");

	$.each( portfolioArr, function(i, val){
			if(portSelect == val.id)
			{
				//once the portfolio is found, exporting it to the mustach template
				return articleMarkup = val;
			}
	});

	var articleLayout = $('#desc-template').html();
	var html = Mustache.to_html(articleLayout, articleMarkup);

	$("#display-article").html(html);
});
