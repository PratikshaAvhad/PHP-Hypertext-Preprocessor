<?php
     session_start();

  $_SESSION["page2_time"]=time();

  $_SESSION["name"]=$_POST["t1"];
  $_SESSION["add"]=$_POST["t2"];
  $_SESSION["mob"]=$_POST["t3"];
  $_SESSION["bdate"]=$_POST["t4"];

?>

<html>
 <body>
  <h1> Flight Details </h1>
  <form method="POST" action="ass6_7ii.php">
   Flight name:
    <input type="text" name="t1"><br>
   Source:
     <input type="text" name="t2"><br>
   Destination:
      <input type="text" name="t3"><br> 
   departure date:
      <input type="date" name="t4"><br>
   departure time:
       <input type="text" name="t5"><br>
   Charges:
       <input type="text" name="t6"><br>
      <input type="submit" value="next">
 </form>
</body>
</html> 
    