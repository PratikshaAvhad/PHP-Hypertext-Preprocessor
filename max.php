<html>
  <body>
   <form method="POST" action="#">
     Enter first no:
   <input type='text' name='t1'><br>
     Enter second no:
   <input type='text' name='t2'><br>
  <input type='submit' value='maximum no'>
 </form>
 </body>
</html>
<?php
     $a=$_POST['t1'];
     $b=$_POST['t2'];
  
   if($a>$b)
      echo("<br> maximum no is=".$a);
   else
      echo("<br> maximum no is=".$b);

?>
  