<?php
    for($n=1;$n<=50;$n++)
    {
      for($i=2;$i<$n;$i++)
    
      {
        if($n%$i==0)
           break;
      }
     if($i==$n)
       echo("<br>prime no=".$n);
     else
       echo("<br>not prime=".$n);
   }
?>