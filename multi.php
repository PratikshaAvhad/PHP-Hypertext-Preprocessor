<html>
 <body>
  <form method='POST' action='#'>
   Enter no to multiplication table:
   <input type='number' name='t1'>
  <input type='submit' value='ok'>
  </form>
 </body>
</form>

<?php
    $n=$_POST['t1'];
     for($i=1;$i<=10;$i++)
       {
         echo("<br>".$n*$i);
       }
?>