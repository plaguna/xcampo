function loginOptions(d)
{
  var submit = document.createElement("input");
  submit.type = "text";
  submit.name = "submitURL";
  submit.setAttribute("class","inputText");
  submit.setAttribute("id",submit.name);
  var label = document.createElement("label");
  label.setAttribute("for", submit.name);
  label.appendChild(document.createTextNode("URL to submit: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(submit);
  d.appendChild(document.createElement("br"));
  
  var img = document.createElement("input");
  img.type = "text";
  img.name = "companyImage";
  img.setAttribute("class","inputText");
  img.setAttribute("id", img.name);
  var label = document.createElement("label");
  label.setAttribute("for", img.name);
  label.appendChild(document.createTextNode("URL of the image: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(img);
  d.appendChild(document.createElement("br"));

  var login = document.createElement("input");
  login.type = "text";
  login.name = "loginTitle";
  login.setAttribute("class","inputText");
  login.setAttribute("id", login.name);
  var label = document.createElement("label");
  label.setAttribute("for", login.name);
  label.appendChild(document.createTextNode("Login title: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(login);
  d.appendChild(document.createElement("br"));

  var text = document.createElement("input");
  text.type = "text";
  text.name = "loginText";
  text.setAttribute("class","inputText");
  text.setAttribute("id", text.name);
  var label = document.createElement("label");
  label.setAttribute("for", text.name);
  label.appendChild(document.createTextNode("Text to show: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(text);
  d.appendChild(document.createElement("br"));
}

function hax0rOptions(d)
{
  var text = document.createElement("input");
  text.type = "text";
  text.name = "hax0rText";
  text.setAttribute("class","inputText");
  text.setAttribute("id", text.name);
  var label = document.createElement("label");
  label.setAttribute("for", text.name);
  label.appendChild(document.createTextNode("Text to show: "));
  d.appendChild(label);  
  d.appendChild(document.createElement("br"));
  d.appendChild(text);
  d.appendChild(document.createElement("br"));
}

function redirectionOptions(d)
{
  var submit = document.createElement("input");
  submit.type = "text";
  submit.name = "submitURL";
  submit.setAttribute("class","inputText");
  submit.setAttribute("id",submit.name);
  var label = document.createElement("label");
  label.setAttribute("for", submit.name);
  label.appendChild(document.createTextNode("URL to redirect: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(submit);
  d.appendChild(document.createElement("br"));
}

function stealOptions(d)
{
  var browsers = new Array("IE", "Firefox");
  d.appendChild(document.createTextNode("Select the browser: "));  
  d.appendChild(document.createElement("br"));
  for(var n = 0; n < browsers.length; n++)
  {
    var radio = document.createElement("input");
    radio.type = "radio";
    radio.name = "browser";
    radio.value = browsers[n];
    radio.setAttribute("class","inputRadio");
    radio.setAttribute("id",browsers[n]);
    var label = document.createElement("label");
    label.setAttribute("for", browsers[n]);
    label.appendChild(document.createTextNode(browsers[n]));
    d.appendChild(radio);
    d.appendChild(label);
  }
  d.appendChild(document.createElement("br"));
  
  var login = document.createElement("input");
  login.type = "text";
  login.name = "usernameField";
  login.setAttribute("class","inputText");
  login.setAttribute("id",login.name);
  var label = document.createElement("label");
  label.setAttribute("for", login.name);
  label.appendChild(document.createTextNode("Login field name: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(login);
  d.appendChild(document.createElement("br"));

  var pass = document.createElement("input");
  pass.type = "text";
  pass.name = "passwordField";
  pass.setAttribute("class","inputText");
  pass.setAttribute("id",pass.name);
  var label = document.createElement("label");
  label.setAttribute("for", pass.name);
  label.appendChild(document.createTextNode("Password field name: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(pass);
  d.appendChild(document.createElement("br"));
  
  var submit = document.createElement("input");
  submit.type = "text";
  submit.name = "submitURL";
  submit.setAttribute("class","inputText");
  submit.setAttribute("id",submit.name);
  var label = document.createElement("label");
  label.setAttribute("for", submit.name);
  label.appendChild(document.createTextNode("URL to send the stealed information: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(submit);
  d.appendChild(document.createElement("br"));
}

function cookieOptions(d)
{
  var submit = document.createElement("input");
  submit.type = "text";
  submit.name = "submitURL";
  submit.setAttribute("class","inputText");
  submit.setAttribute("id",submit.name);
  var label = document.createElement("label");
  label.setAttribute("for", submit.name);
  label.appendChild(document.createTextNode("URL to send the cookie: "));
  d.appendChild(label);
  d.appendChild(document.createElement("br"));
  d.appendChild(submit);
  d.appendChild(document.createElement("br"));
  
  d.appendChild(document.createTextNode("How do you want to send the data?: "));  
  d.appendChild(document.createElement("br"));
  d.appendChild(document.createElement("br"));
  var extraction = new Array("iframe", "redirect", "popup");
  for(var n = 0; n < extraction.length; n++)
  {
    var radio = document.createElement("input");
    radio.type = "radio";
    radio.name = "extraction";
    radio.setAttribute("class","inputRadio");
    radio.setAttribute("id",extraction[n]);
    var label = document.createElement("label");
    label.setAttribute("for", extraction[n]);
    label.appendChild(document.createTextNode(extraction[n]));
    radio.value = extraction[n];
    d.appendChild(radio);
    d.appendChild(label);
  }
  d.appendChild(document.createElement("br"));
}
