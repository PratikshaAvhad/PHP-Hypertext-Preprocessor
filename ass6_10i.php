<body bgcolor="pink">
<?php
      session_start();

    $name=$_POST["t1"];
    $e=$_POST["t2"];
    $sadd=$_POST["t3"];
    $mp=$_POST["t4"];

  $_SESSION["name"]=$name;
  $_SESSION["email id"]=$e;
  $_SESSION["shhipping add"]=$sadd;
  $_SESSION["mode payment"]=$mp;
?>
</font>
</body>

<html>
  <body>
     <font color="red">
  <h1> Purchase Details </h1>
   <form method="POST" action="ass6_10ii.php">
 Price;
   <input type="text" name="t5"><br>
 Quantity:
   <input type="text" name="t6"><br>
   <input type="submit" value="next">
  </form>
 </body>
</html>