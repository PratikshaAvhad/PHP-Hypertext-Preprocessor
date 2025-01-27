<html>
  <body>
   <form method="POST" action="#">
     Enter first no:
   <input type='text' name='t1'><br>
     Enter second no:
   <input type='text' name='t2'><br>
  <input type='submit' value='arithmatic operations'>
 </form>
 </body>
</html>
<?php
   $a=$_POST["t1"];
   $b=$_POST["t2"];
                 $add=$a+$b;
                 $sub=$a-$b;
                 $mul=$a*$b;
                 $div=$a/$b;
                 $mod=$a%$b;

   echo("<br>addition=".$add);  
   echo("<br>substraction=".$sub);     
   echo("<br>multiplication=".$mul);     
   echo("<br>division=".$div);     
   echo("<br>mod=".$mod); 

?>       


   