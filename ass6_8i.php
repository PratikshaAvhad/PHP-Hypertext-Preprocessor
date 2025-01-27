<?php
      session_start();

 $pname=$_POST["t1"];
 $padd=$_POST["t2"];
 $bdate=$_POST["t3"];
 $mob=$_POST["t4"];

 $_SESSION["name"]=$pname;
 $_SESSION["address"]=$padd;
 $_SESSION["birthdate"]=$bdate;
 $_SESSION["mobile no"]=$mob;
?>

<html>
 <body>
  <h1> Health Details </h1>
  <form method="POST" action="ass6_8ii.php">
   Medicare no:
    <input type="text" name="t5"><br>
   Health fund:
    <input type="text" name="t6"><br>
   Critical info:
    <input type="text" name="t7"><br>
    <input type="submit" value="next">
 </form>
 </body>
</html>
  