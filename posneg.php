<html>
  <body>
   <form method='POST' action='#'>
     Enter number:
   <input type='number' name='t1'><br>
    <input type='submit' value='positive or negative'>
  </form>
 </body>
</html>
<?php
   $a=$_POST['t1'];

   if($a>0)
     echo("<br> number is  positive=".$a);
   else
     echo("<br> number is negative=".$a);
?>
        