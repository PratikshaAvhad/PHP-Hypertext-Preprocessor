<html>
 <body>
  <form method="POST" action="#">
  Enter string:
   <input type="text" name="t1"><br>
  <input type="submit" value="check"><br>
 </form>
 </body>
</html>
<?php
    $s=$_POST["t1"];
 $a=0;
 $e=0;
 $i=0;
 $o=0;
 $u=0;

   for($i=0;$i!=NULL;$i++)
  {
    if($s[$i]=='A'||$s[$i]=='a'||
       $s[$i]=='E'||$s[$i]=='e'||
       $s[$i]=='I'||$s[$i]=='i'||
       $s[$i]=='O'||$s[$i]=='o'||
       $s[$i]=='U'||$s[$i]=='u')
     {
       if($s[$i]=='A'||$s[$i]=='a')
           $a++;
       elseif($s[$i]=='E'||$s[$i]=='e')
           $e++;
       elseif($s[$i]=='I'||$s[$i]=='i')
           $i++;
       elseif($s[$i]=='O'||$s[$i]=='o')
           $o++;
        elseif($s[$i]=='U'||$s[$i]=='u')
           $u++;
      }
  }
   echo("<br> number of count A=".$a);
   echo("<br> number of count E=".$e);
   echo("<br> number of count I=".$i);
   echo("<br> number of count O=".$o);
   echo("<br> number of count U=".$u);
?>



 