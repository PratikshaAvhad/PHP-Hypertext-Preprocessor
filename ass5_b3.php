<html>
 <body>
  <form method="POST" action="#">
   Enter student name:
    <input type="text" name="t1"><br>
   Select languages:<br>
    <input type="checkbox" name="c1[]" value="CPP">CPP<br>
    <input type="checkbox" name="c1[]" value="JAVA">JAVA<br>
    <input type="checkbox" name="c1[]" value="PHP">PHP<br>
    <input type="checkbox" name="c1[]" value="Python">Python<br>
    <input type="checkbox" name="c1[]" value="HTML">HTML<br>
   <input type="submit" value="ok">
 </form>
</body>
</html>
<?php
     $n=$_POST["t1"];
   if(isset($_POST["c1"]))
   {
     $a=$_POST["c1"];
      echo("$n's selected languages=");
  
      foreach($a as $s)
   {
     echo("<br>".$s);
   }
  }
   else
   {
    echo("plz select language");
   } 
?>