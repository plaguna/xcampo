function getPayload()
{
	var url = 'payloads.php?payload='+document.xcampo.payload.value;
	
	for(var i = 0; i < document.xcampo.elements.length; i++)
	{
		var element = document.xcampo.elements[i];
		
		if(element.type == "text")
			url += "&" + element.name + "=" + element.value;
		else if(element.type == "checkbox" && element.checked == true)
			url += "&" + element.value + "=1";
		else if(element.type == "radio" && element.checked == true)
			url += "&" + element.name + "=" + element.value;
	}	
	
  var req = new XMLHttpRequest();
	req.open('GET', url, true);
	req.onreadystatechange = function (aEvt) {
	  if (req.readyState == 4) {
		 if(req.status == 200)
		  document.xcampo.result.value = req.responseText;
		 else
		  document.xcampo.result.value = "I hope you read this only looking at the source code... ;)";
	  }
	};
	req.send(null);
}

function showPayloadOptions()
{
// This is making some strange behaivour in my browser... I'l activate it when 
// I discover the way to do it better
//  $('#payloadOptions').hide('fast', function() {
	  var options = document.getElementById("payloadOptions");
	  options.innerHTML = ""; // Cleaning home...
	  
	  // Switch to load the different options in the payloads, we have to send the
	  // options object to add the HTML child elements.
	  switch(document.xcampo.payload.value)
	  {
    	case "login":
		    loginOptions(options);
			  break;
		  case "hax0r":
			  hax0rOptions(options);
			  break;
		  case "redirection":
		    redirectionOptions(options);
			  break;
		  case "steal":
		    stealOptions(options);
		    break;
		  case "cookie":
		    cookieOptions(options);
		    break;
		  default:
			  break;
	  }
//	});
	
  $('#payloadOptions').show('slow');
}
