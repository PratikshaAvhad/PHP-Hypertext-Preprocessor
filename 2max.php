<html>
 <body>
  <form method='POST' action='#'>
   Enter 1st no:
   <input type='text' name='t1'><br>
   Enter 2nd no:
    <input type='text' name='t2'><br>
   Enter 3rd no:
    <input type='text' name='t3'><br>
   <input type='submit' value='max nos'>
 </form>
 </body>
</html>
<?php
  
   $a=$_POST['t1'];
   $b=$_POST['t2'];
   $c=$_POST['t3'];

  if($a>$b && $a>$c)
      echo("<br>max no is=".$a);
  else if($b>$a && $b>$c)
      echo("<br>max no is=".$b);
  else
      echo("<br>max no is=".$c);

?>