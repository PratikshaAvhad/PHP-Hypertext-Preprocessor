<html>
  <body>
    <form method="POST" action="#">
   Enter large string:
    <input type="text" name="t1"><br>
   Enter small string:
    <input type="text" name="t2"><br>
     <input type="submit">
   </form>
  </body>
 </html>

<?php 

     $s1=$_POST["t1"];
     $s2=$_POST["t2"];

    $k=strpos($s1,$s2);
     if($k==FALSE)
        echo("string not found");
     else if($k<1)
        echo("<br>string found at the starting");
     else if($k>0)
        echo("<br>string found at the middle or last");

    $c=substr_count($s1,$s2);
       echo("<br>occurrency count=".$c);

    $r=str_replace($s2,"@",$s1);
        echo("<br> REplace string=".$r);

?>