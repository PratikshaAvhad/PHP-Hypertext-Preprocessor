<html>
 <body>
   <form method='post' action='#'>
    Enter Fisrt String:
      <input type='text' name='t1'><br>
    Enter Second string:
      <input type='text' name='t2'><br>
     <input type='submit' value='ok'>
     <input type='reset' value='clear'>
  </form>
 </body>
</html>
 
<?php
     $s1=$_POST['t1'];
     $s2=$_POST['t2'];
      printf("concate string=%s%s",$s1,$s2);
?> 