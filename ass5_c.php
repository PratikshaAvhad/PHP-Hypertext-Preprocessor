<html>
 <body>
  <form method="POST" action="#">
   Enter name:
    <input type="text" name="t1"><br>
   Enter age:
    <input type="text" name="t2"><br>
    <input type="submit">
  </form>
 </body>
</html>
<?php
     $n=$_POST["t1"];
     $a=$_POST["t2"];

   if($a<18)
     echo("Hello $n,you are not authorized to  visit this site");
   else
     echo("welcome $n to this site");
?>
