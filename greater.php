<html>
 <body>
   <form method='post' action='#'>
    Enter Fisrt No:
      <input type='text' name='t1'><br>
    Enter Second No:
      <input type='text' name='t2'><br>
    Enter Third No:
      <input type='text' name='t3'><br>
     <input type='submit' value='ok'>
     <input type='reset' value='clear'>
  </form>
 </body>
</html>
 
<?php
     $a=$_POST['t1'];
     $b=$_POST['t2'];
     $c=$_POST['t3'];
     
       if($a>$b && $a>$c)
          printf("greater no=%d",$a);
       else if($b>$a && $b>$c)
          printf("greater no=%d",$b);
       else
          printf("greater no=%d",$c);
?> 