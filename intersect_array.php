<?php
     $a=array("1"=>"22","2"=>"89","3"=>"77","4"=>"99","5"=>"55");
  echo("after sorting");
   ksort($a);
  print_r($a);
  $len=0;
   for($i=0;$i<5;$i++)
{
   $len++;
}
 echo("<br>Length of array=".$len);

$b=array_splice($a,2,1);
  echo("<br>after remove element");
   print_r($b);
 echo("<br>original array="); 
  print_r($a);

 $c=array_reverse($a);
  echo("<br> reverse array=");
 print_r($c);

?>  
