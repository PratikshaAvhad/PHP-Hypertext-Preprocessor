<?php

    $a=array("one"=>10,"two"=>20,"three"=>30,"four"=>40);
   
   //sort
     
    print_r($a);

  //size
     echo("<br>");
     $c=count($a);
       echo("<br>size of array=".$c);

  //delete
     echo("<br>");
    $s=array_slice($a,2,1);
     print_r($s);

  //reverse
    echo("<br>");
    $k=array_flip($a);
     print_r($k);
 
  //display random
    echo("<br>");
    shuffle($a);
     print_r($a);

?>