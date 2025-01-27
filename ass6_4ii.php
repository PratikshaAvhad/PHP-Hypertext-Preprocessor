<?php
     session_start();

  $sno=$_SESSION["seat no"];
  $name=$_SESSION["name"];
  $c=$_SESSION["class"];

  $php=$_POST["t1"];
  $cpp=$_POST["t2"];
  $ds=$_POST["t3"];
  $rdbms=$_POST["t4"];

 echo("<h4> Student Info </h4>");
  
  echo("<br> seat no=".$sno);
  echo("<br> name=".$name);
  echo("<br> class=".$c);

echo("<h4> Subject Marks </h4>");

  echo("<br> PHP=".$php);
  echo("<br> CPP=".$cpp);
  echo("<br> Ds=".$ds);
  echo("<br> RDBMS=".$rdbms);

echo("<br> Total marks=".$php+$cpp+$ds+$rdbms);

?> 
   