<?php
     function area($r,$b)
  {
    $a=2*3.14*$r*($r+$b);
     echo("<br> area of cylinder=".$a);
  }
    function volume($r,$b)
  {
    $v=3.14*$r*$r*$b;
     echo("<br> volume of cylinder=".$v);
  }

   area(3.4,7.8);
    volume(3.4,7.8);
?>