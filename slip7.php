<html>
 <body>
  <form method="post"action="#">
   <h1>operation</h1>
    <input type="radio"name="r1"value="1">display<br>
    <input type="radio"name="r1"value="2">size<br>
    <input type="radio"name="r1"value="3">delete<br>
    <input type="radio"name="r1"value="4">reverse<br>
    <input type="radio"name="r1"value="5">traverse<br>
   <input type="submit"value="okk"><br>
  </form>
 </body>
</html>
<?php
 $a=array('one'=>10,'two'=>20,'three'=>30,'four'=>40,'five'=>50);
 $ch=$_POST["r1"];
 switch($ch)
 {
   case 1:foreach($a as $key=>$value)
          
             ksort($a);
             print_r($a);
          
          break;  
   case 2:echo sizeof($a); 
          break; 
   case 3:$b=array_splice($a,3,2);
          print_r($b);
          break;
   case 4:print_r(array_flip($a));
          break;

   case 5:shuffle($a);
          print_r($a);
           break;   
   }
?>
