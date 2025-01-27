
<?php
     $c1=0;
       $c2=0; 
        for($n=1;$n<=100;$n++)
       {
         if($n%2==0)
          $c1++;
       else
          $c2++;
       }
    echo("<br> Even count=".$c1);
    echo("<br> Odd count=".$c2);

?> 