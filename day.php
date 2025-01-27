<html>
 <body>
  <form method='POST' action='#'>
   Enter day:
   <input type='text' name='t1'><br>
   <input type='submit' value='color'>
  </form>
 </body>
</html>
<?php
    $d=$_POST['t1'];
   switch($d)
 {
   case 'sunday':echo("<body bgcolor=pink>");
                 break;

   case 'monday':echo("<body bgcolor=blue>");
                 break;

   case 'tuesday':echo("<body bgcolor=orange>");
                  break;

   case 'wednesday':echo("<body bgcolor=yellow>");
                 break;

  case 'thursday':echo("<body bgcolor=cyan>");
                 break;

  case 'friday':echo("<body bgcolor=green>");
                 break;

  case 'saturday':echo("<body bgcolor=red>");
                 break;
 }
?>


   



 
  