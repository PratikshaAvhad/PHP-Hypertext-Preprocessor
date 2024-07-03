<html>
 <body>
  <form method="post" action="#">
   Enter customer name:
    <input type="text" name="t1"><br>
   Enter Address:
     <textarea name="t2"></textarea><br>
     Enter Phone No:
    <input type="number" name="t3"><br>
   Select Gender:
    <input type="radio" name="r1" value="a">Male <br>
    <input type="radio" name="r1" value="a">Female <br>
   <input type="submit">
 </form>
</body>
</html> 

<?php
    $mn=$_POST["t1"];
    $add=$_POST["t2"];
    $phn=$_POST["t3"];
    $g=$_POST["r1"];
       
     printf("<br>Name=%s",$mn);
     printf("<br>Address=%s",$add);
     printf("<br>Phone No=%s",$phn);
     printf("<br>Gender=%s",$g);
?>
     

 