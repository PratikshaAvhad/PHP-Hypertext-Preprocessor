<html>
 <body>
   <form method="POST" action="#">
  Enter large string:
   <input type="text" name="t1"><br>
  Enter small string:
   <input type="text" name="t2"><br>
  Enter replace string:
   <input type="text" name="t3"><br>
  <input type="submit" value="ok">
  </form>
 </body>
</html>

<?php
     
   $s1=$_POST["t1"];
   $s2=$_POST["t2"];
   $s3=$_POST["t3"];

  if(preg_match("/^$s1/","$s2"))
    echo("<br>staring is found..");
  else
    echo("<br>not found..");

  $s=preg_replace("/$s2/",$s3,$s1);
     echo("<br>Replace string=".$s);

  $a=preg_split("/ /",$s1);
    echo("<br>Split string=");
     print_r($a);

?>  