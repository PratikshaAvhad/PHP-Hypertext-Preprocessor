<html>
  <body>
    <form method="POST" action="#">
   enter 1st number:
    <input type="text" name="t1"><br>
   enter 2nd number:
    <input type="text" name="t2"><br>

   <h3>Arithmatic Operations</h3><br>
  
    <input type="radio" name="r1" value=1>Addition<br>
    <input type="radio" name="r1" value=2>substraction<br>
    <input type="radio" name="r1" value=3>multiplication<br>
    <input type="radio" name="r1" value=4>division<br>
    <input type="submit" value="ok">
   </form>
  </body>
 </form>

<?php
     $n1=$_POST["t1"];
     $n2=$_POST["t2"];
     $ch=$_POST["r1"];

    if($ch==1)
     {
        $n3=$n1+$n2;
          echo("addition=".$n3);
     }
    if($ch==2)
     {
        $n3=$n1-$n2;
          echo("substraction=".$n3);
     }
    if($ch==3)
     {
        $n3=$n1*$n2;
          echo("multiplication=".$n3);
     }
    if($ch==4)
     {
        $n3=$n1/$n2;
          echo("division=".$n3);
     }
 ?>