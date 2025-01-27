<?php
     session_start();

 $sno=$_POST["t1"];
 $name=$_POST["t2"];
 $c=$_POST["t3"];

 $_SESSION["seat no"]=$sno;
 $_SESSION["name"]=$name;
 $_SESSION["class"]=$c;

?>

<html>
 <body>
  <form method="POST" action="ass6_4ii.php">
  <h1> Select Subject Marks </h1>
 PHP:
  <input type="text" name="t1"><br>
 CPP:
  <input type="text" name="t2"><br>
 Ds:
  <input type="text" name="t3"><br>
 RDBMS:
   <input type="text" name="t4"><br>
   <input type="submit" value="next"><br>
 </form>
 </body>
</html>

  