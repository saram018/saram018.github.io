// Your JavaScript goes here...

function parse(){
	
	var xmlhttp = new XMLHttpRequest();
	var url = "data.json";
    xmlhttp.open("GET", url, true);

	xmlhttp.onreadystatechange = function stateChanged() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var quotes = JSON.parse(xmlhttp.responseText);
        displayQuotes(quotes);
		}
	};

xmlhttp.send();
}

function displayQuotes(quotes) {
    var output = "";
    var i;
    for(i = 0; i < quotes.length; i++) {
      output += '<div class="quote"><p class="message">' + quotes[i].content +'</p><p class ="author">' + quotes[i].author + '</p></div>';
    }
   document.getElementById("quotes").innerHTML = output;
}