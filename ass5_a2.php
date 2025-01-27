<html>
 <body>
  <form method="POST" action="#">
   Enter name:
  <input type="text" name="t1"><br>
   Enter address:
  <input type="text" name="t2"><br>
   Enter pincode:
  <input type="text" name="t3"><br>
   Enter  gender:
   <input type="radio" name="r1" value="female">Female
   <input type="radio" name="r1" value="male">Male<br>
 <input type="submit">
 </form>
 </body>
</html>
<?php
     if(empty($_POST["t1"])&&empty($_POST["t2"])&&empty($_POST["t3"])&&empty($_POST["r1"]))
      {
       echo("all fields are required");
      }
    else
      {
       $n=$_POST["t1"];
       $add=$_POST["t2"];
       $p=$_POST["t3"];
       $g=$_POST["r1"];
      {
       echo("<br>Name:".$n);
       echo("<br>Address:".$add);
       echo("<br>pincode:".$p);
       echo("<br>Gender:".$g);
      }
     }
?> 









 
  