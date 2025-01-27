<?php
     $var=array("val1"=>"e1","val2"=>"B1","val3"=>"C1");
   print_r($var);

  echo("<br> after sort key");
      ksort($var);
  print_r($var);

 echo("after sort value");
      asort($var);
  print_r($var);

?>