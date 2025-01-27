<?php 
     function power($x,$y)
  {
     $a=1;
       for($i=1;$i<=$y;$i++)
    {
      $a=$a*$x;
    }

    echo("<br> power=".$a);
 }

  power(2,5);
