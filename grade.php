<html>
 <body>
  <form method='POST' action='#'>
   Enter percentage:
    <input type='text' name='t1'><br>
    <input type='submit' value='grade'>
  </form>
 </body>
</form>

<?php
   $p=$_POST['t1'];
    echo("percentage=".$p);
   if($p<40)
      echo("<br> Fail...");
   else if($p<50)
      echo("<br> Pass...");
   else if($p<60)
      echo("<br> Higher second class...");
   else if($p<70)
      echo("<br> First class..");
   else
      echo("<br> Fisrt class with destination..");

?> 
