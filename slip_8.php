<?php

    $a=array("1"=>10,"2"=>20,"3"=>30,"4"=>40);
    $b=array("a"=>1,"b"=>2,"c"=>3,"d"=>4);
   
     echo("<br>sort by assending<br>");
      asort($a);
      print_r($a);

    echo("<br>sort by descending<br>");
       arsort($a);
       print_r($a); 

   echo("<br>Sort by value");
     sort($a);
    print_r($a);

    echo("<br>merge array");
       $m=array_merge($a,$b);
         print_r($m);

    echo("<br>Intersect,different");
     $i=array_diff($a,$b);
      print_r($i);

      
?>
