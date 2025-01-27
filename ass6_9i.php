<?php
     session_start();

   $n=$_POST["name"];
   $q=$_POST["quantity"];
   $s=$_POST["sold"];

   $_SESSION["name"]=$n;
   $_SESSION["quantity"]=$q;
   $_SESSION["sold"]=$s;
?>

<html>
  <body>
    <form method="POST" action="ass6_9ii.php">
  <h3> Sales Details </h3>
   Product name:
    <input type="text" name="t1"><br>
   Date:
    <input type="date" name="t2"><br>
   Total sale:
    <input type="text" name="t3"><br>
    <input type="submit" value="next">
  </form>
 </body>
</html>