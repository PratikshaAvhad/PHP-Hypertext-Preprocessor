<?php
     function search($a,$n)
     {
        $i=0;
        $f=0;
        for($i=0;$i<5;$i++)
       {
         if($a[$i]==$n)
          $f=1;
        }
      if($f==1)
        echo("number is found");
      else
        echo("number is not found");
    }
 
  $a=array(23,33,55,32,21);
    search($a,55);