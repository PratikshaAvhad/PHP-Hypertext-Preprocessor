<?php 
     function maximum($a,$b,$c)
  {
    if($a>$b && $a>$c)
      return $a;
    elseif($b>$a && $b>$c)
       return $b;
    elseif($c>$a && $c>$a)
       return $c;
  }
   echo("<br> Maximum no is=".maximum(44,55,12));

?>