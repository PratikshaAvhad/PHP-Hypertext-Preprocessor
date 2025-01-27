<html>
 <body>
   <form method="post" action="#">
  enter string:
   <input type="text" name="t1">
   <input type="submit" value="ok">
  </form>
 </body>
</html>

<?php
     $s=$_POST["t1"];
      count_vowels($s);
      palindrome($s);

   function count_vowels($s)
  {
    $c1=0;
    $c2=0;
    $c3=0;
    $c4=0;
    $c5=0;
          for($i=0;$i<strlen($s);$i++)
      {
         if($s[$i]=='A' || $s[$i]=='a')
           $c1=$c1+1;

        if($s[$i]=='E' || $s[$i]=='e')
           $c2=$c2+1;
  
        if($s[$i]=='I' || $s[$i]=='i')
           $c3=$c3+1;
    
        if($s[$i]=='O' || $s[$i]=='o')
           $c4=$c4+1;
  
        if($s[$i]=='U' || $s[$i]=='u')
           $c5=$c5+1;
     }
      echo("<br> A count=".$c1);
      echo("<br> E count=".$c2);
      echo("<br> I count=".$c3);
      echo("<br> O count=".$c4);
      echo("<br> U count=".$c5); 
  }

   function palindrome($s)
  {
    $f=0;
     for($i=0,$j=strlen($s)-1;$i<strlen($s);$i++,$j--)
    {
      if($s[$i]!=$s[$j])
      {
        $f=1;
        break;
      }
   }
  if($f==0)
     echo("<br>string is palindrome");
  else
     echo("<br>string is not palindrome");
 }

?>

 