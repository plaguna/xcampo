<html>
<head>
<title>XCampo - XSS payload generator</title>
<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js"></script>
<script src="XMLHttpRequest.js"></script>
<script src="js/payloadOptions.js"></script>
<script src="js/main.js"></script>
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/forms.css" type="text/css" media="screen" />
</head>
<body>
<div id="xcampo">

<div id="presentation">
  <h1>XCampo <br /> A XSS payload generator</h1>
  <h2>This page will help you to generate different payloads to your 
      XSS demos. Use them responsible in your own website or in these where 
      you are allowed to do.<br />
      Don't expect the code will works in all the scenario, probably you will 
      need to tweak it most of the times... but I'm pretty sure you 
      know how to do it ;)</h2>
</div>

<form name="xcampo">
  <fieldset><legend>Payload</legend>
<label for="payload">Select the payload type:</label> <select name="payload" onchange="showPayloadOptions()">
  <option value="nothing">Select a payload...</option>
	<option value="login">Fake login</option>
	<option value="hax0r">hax0r defacement</option>
	<option value="redirection">Form redirection</option>
	<option value="steal">Password managers</option>
  <option value="cookie">Session cookies</option>
  </select>
  </fieldset>
  <fieldset><legend>Payload Options</legend>
  <div id="payloadOptions">
  Nothing yet...
  </div>
  </fieldset>
  <br />
  <div id="generalOptions">
  <fieldset><legend>General Options</legend>
    <input type="checkbox" id="urlencode" name="tweaks" value="urlencode" /><label for="urlencode">Use rawurlencode()</label><br />
    <input type="checkbox" id="quotes" name="tweaks" value="quotes" /><label for="quotes">Don't use quotes</label><br />
   </fieldset>
   </div>
   <input type="button" value="Generate" name="generate" onclick="getPayload()" /><br />
  <fieldset><legend>Payload</legend>
  <textarea id="result" name="result" cols="60" rows="7" readonly onclick="document.xcampo.result.select();"></textarea>
  </fieldset>
</form>
<div id="credits">Download <a href="http://code.google.com/p/xcampo/">XCampo</a> from Google Code.</div>
</div>
</body>
</html>
