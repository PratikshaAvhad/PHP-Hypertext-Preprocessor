<?php
     session_start();

  $n=$_SESSION["name"];
   $q=$_SESSION["quantity"];
  $s=$_SESSION["sold"];

  $pn=$_POST["t1"];
   $d=$_POST["t2"];
   $ts=$_POST["t3"];

  echo("<h2> Highest Sold Product Details </h2>");
   echo("<table border=1>");
    echo("<tr>");
     echo("<td> Product name </td>");
      echo("<td> $n </td>");
       echo("</tr>");

   echo("<tr>");
     echo("<td> Total Quantity </td>");
      echo("<td> $q </td>");
       echo("</tr>");

   echo("<tr>");
     echo("<td> Total Sold </td>");
      echo("<td> $s </td>");
       echo("</tr>");
    echo("</table>");

  echo("<h2> Latest Sales Product Details </h2>");
   echo("<table border=1>");
    echo("<tr>");
     echo("<td> Product name </td>");
      echo("<td> $pn </td>");
       echo("</tr>");

  echo("<tr>");
     echo("<td> Date </td>");
      echo("<td> $d </td>");
       echo("</tr>");
    
  echo("<tr>");
     echo("<td> Total Sales </td>");
      echo("<td> $ts </td>");
       echo("</tr>");
    echo("</table>");
?>

  
  