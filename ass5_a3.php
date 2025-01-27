<html>
 <body>
  <form method="post" action="#">
  <h1> Employee details</h1>
   Employee name:
    <input type="text" name="t1"><br>
   Employee adress:
    <textarea name="t2"></textarea><br>
  <hr>
  <h1> Earning details</h1>
   Enter basic salary:
   <input type="text" name="t3"><br>
   Enter DA:
    <input type="text" name="t4"><br>
   Enter HRA:
    <input type="text" name="t5"><br>
   <input type="submit">
  <hr>
 </form>
</body>
</html>
<?php
     $n=$_POST["t1"];
     $add=$_POST["t2"];
     $bsal=$_POST["t3"];
     $da=$_POST["t4"];
     $hra=$_POST["t5"];

    $tsal=$bsal+$da+$hra;

   echo("<table border=1>");
     echo("<tr>");
       echo("<td>Employee name</td>");
        echo("<td>$n</td>");
     echo("</tr>");

  echo("<tr>");
   echo("<td>Employee address</td>");
     echo("<td>$add</td>");
  echo("</tr>");

  echo("<tr>");
       echo("<td>Basic salary</td>");
        echo("<td>$bsal</td>");
     echo("</tr>");

  echo("<tr>");
       echo("<td>DA</td>");
        echo("<td>$da</td>");
     echo("</tr>");

  echo("<tr>");
       echo("<td>HRA</td>");
        echo("<td>$
hra</td>");
     echo("</tr>");

  echo("<tr>");
       echo("<td>Total salary</td>");
        echo("<td>$tsal</td>");
     echo("</tr>");
 echo("</table>");

?>


 