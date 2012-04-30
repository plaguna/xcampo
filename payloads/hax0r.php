<?php
$result  = "<script src=".$jQueryURL."></script>";
$result .= "<script src=".$jQueryUIURL."></script>";
$result .= "<style>";
$result .= "body{height:100%;}";
$result .= "#h{opacity:0.8;position:absolute;_position:absolute;top:0;left:0;height:100%;width:100%;";
$result .= "display:block;background:#000;z-index:2;}";
$result .= "#h h1{text-align:center;color:red;font-size:22px;font-weight:700;}";
$result .= "</style>";
$result .= "<body id=b><div id=h><h1>";
$result .= $hax0rText;
$result .= "</h1></div>";
$result .= "<script>";
$result .= "$(\"#b\").click('shake',{times:3},600);}";
$result .= "</script></body>";
?>
