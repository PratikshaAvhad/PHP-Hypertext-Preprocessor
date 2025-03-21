<?php
   class circle
  {
     function find_circumference($r)
     {
       $c=2*3.14*$r;
       echo("circumference of circle=".$c);
     }
      function find_area($r)
      {
        $a=3.14*$r*$r;
        echo("area of circle=".$a);
      }
  }
   $ob=new circle();

    $ch=$_POST["t1"];
     if($ch==1)
       $ob->find_circumference(5.6);
   
     if($ch==2)
       $ob->find_area(5.6);
?>
<html>
  <form method="post" action="#">
    1-circumference<br>
     2-area<br>
   Enter choice:<input type="text" name="t1">
    <input type="submit" value="ok">
  </form>
</html> 
  
  
  