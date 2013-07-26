<?php
function file($text){
//replaces text between {{}} with wiki links
//http://www.php.net/manual/en/function.call-user-func.php

  
  $pattern="/\{\{file:\s*([[:alnum:]\/\)\(\,\.\-\&\s\'\"\!\.\?\;\:]+)\}\}/";
  $z=preg_match_all($pattern,$text,$values);
  //load files from disk
  //echo_array($values);
  foreach($values[1] as $key=>$value){
   $txt=@file_get_contents('/latenightengineer/examples/registration.yaml');
   }
   $s='<pre>';
   $s.=($txt);
   $s.='</pre>';
   //echo $s;
 }
?>