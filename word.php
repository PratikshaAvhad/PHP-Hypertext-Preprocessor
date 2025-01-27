<html>
 <body>
  <form method='POST' action='#'>
     Enter number:
   <input type='text' name='t1'><br>
   <input type='submit' value='ok'>
  </form>
 </body>
</html>
<?php
    $n=$_POST['t1'];
      echo("<br>number=".$n);
    $r=0;
    while((int)$n>0)
   {
     $d=$n%10;
     $r=($r*10)+$d;
     $n=(int)$n/10;
   }
  while((int)$r>0)
   {
     $d=$r%10;
      $r=(int)$r/10;
     switch($d)
 {
   case 0 :echo("<br>zero");
           break; 
   case 1 :echo("<br>one");
           break; 
   case 2 :echo("<br>two");
           break; 
   case 3 :echo("<br>three");
           break; 
   case 4 :echo("<br>four");
           break; 
   case 5 :echo("<br>five");
           break; 
   case 6 :echo("<br>six");
           break; 
   case 7 :echo("<br>seven");
           break; 
   case 8 :echo("<br>eight");
           break;  
   case 1 :echo("<br>nine");
           break; 
}
}
?>