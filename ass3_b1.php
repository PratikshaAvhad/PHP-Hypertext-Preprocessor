<?php
     $s1="pratiksha";
     $s2="neha";
  $c=strcmp($s1,$s2);
   if($c>0)
     echo("first string is greater=".$s1);
   else if($c<0)
     echo("second string is greater=".$s2);
   else
     echo("string is equal");
   
  echo("<br>upper case=");
    $b=strtoupper($s1);
    echo($b);
  echo("<br>lower case=");
    $d=strtolower($s2);
   echo($d);
?>