<?php
     
    session_start();

   $name=$_POST["t1"];
   $add=$_POST["t2"];
   $phno=$_POST["t3"];

  $_SESSION["name"]=$name;
  $_SESSION["address"]=$add;
  $_SESSION["mobile"]=$phno;

?>
<html>
 <body>
   <form method="POST" action="slip10ii.php">
   Product name:
    <input type="text" name="t4"><br>
   Product rate:
    <input type="text" name="t5"><br>
   Product quantity:
    <input type="text" name="t6"><br>
   <input type="submit" value="next">
  </form>
 </body>
</html>
 