<html>
 <body>
  <form method='POST' action='#'>
   Enter year:
  <input type='text' name='t1'><br>
   <input type='submit' value='leap or not'>
  </form>
 </body>
</html>

<?php
    $y=$_POST['t1'];
    
    if($y%4==0)
      echo("<br> year is leap=".$y);
    else
      echo("<br> not leap year=".$y);

?> 
    