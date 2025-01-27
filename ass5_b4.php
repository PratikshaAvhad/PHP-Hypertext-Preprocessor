<html>
 <body>
  <form method="POST" action="#">
    Enter name:
    <input type="text" name="t1"><br>
    Enter email:
     <input type="text" name="t2"><br>
    Enter age:
     <input type="text" name="t3"><br>
   <input type="submit">
 </form>
 </body>
</html>
<?php
     $n=$_POST["t1"];
     $e=$_POST["t2"];
     $a=$_POST["t3"];

 if(!filter_var($e,FILTER_VALIDATE_EMAIL))
    die("Invalid email");

 if(!filter_var($a,FILTER_VALIDATE_INT))
    die("Invalid age");
{
  echo("<br> name=".$n);
  echo("<br> email=".$e);
  echo("<br> age=".$a);
}

?>       