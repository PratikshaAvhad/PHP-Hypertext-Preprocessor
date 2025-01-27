<html>
 <body>
  <form method="POST" action="#">
    enter DSA marks:
   <input type='text' name='t1'><br>
    Enter DM marks:
   <input type='text' name='t2'><br>
    Enter PHP marks:
   <input type='text' name='t3'><br>
    Enter SE marks:
   <input type='text' name='t4'><br>
    Enter BIG DATA marks:
   <input type='text' name='t5'><br>
    <input type='submit'>
  </form>
 </body>
</html>
<?php
     $m1=$_POST['t1'];
     $m2=$_POST['t2'];
     $m3=$_POST['t3'];
     $m4=$_POST['t4'];
     $m5=$_POST['t5'];

  $t=$m1+$m2+$m3+$m4+$m5;
  $p=$t/5;

  echo("<br>total marks=".$t);
  echo("<br>percentage=".$p);

?> 