<?php
     $a=array(87,99,33,22,47);
  $f=0;
   for($i=0;$i<5;$i++)
  {
     if($a[$i]<0)
      $f++;
  }
  if($f==0)
     echo("<br> array elements are positive");
  else
     echo("<br> array elements are negative");

   echo("<br> sum of array elements=".array_sum($a));

?>