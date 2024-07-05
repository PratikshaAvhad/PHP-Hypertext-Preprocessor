<html>
 <body>
   <form method='post' action='#'>
    Enter year:
      <input type='text' name='t1'><br>
     <input type='submit' value='ok'>
     <input type='reset' value='clear'>
  </form>
 </body>
</html>
 
<?php
     $y=$_POST['t1'];
       if($y%4==0)
          printf("year is leap",$y);
       else
          printf("year is not leap",$y);
     
?> 