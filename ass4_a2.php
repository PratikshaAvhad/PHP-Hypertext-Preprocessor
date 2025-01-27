<?php
     function evenodd()
  {
    echo("<br>even numbers= ");
     for($i=1;$i<=50;$i++)
     {
       if($i%2==0)
           echo("$i  ");
     }
   echo("<br>odd numbers= ");
      for($i=1;$i<=50;$i++)
       {
         if($i%2==1)
           echo("$i  ");
       }
  }
  
 evenodd();

?> 