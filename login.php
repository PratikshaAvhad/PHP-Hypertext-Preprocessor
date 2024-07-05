<html>
 <body>
  <form method='post' action='#'>
    Enter Username:
    <input type='text' name='t1'><br>
    Password:
     <input type='password' name='t2'><br>
    <input type='submit' value='login'>
    <input type='reset'>
 </form>
</body>
</html>

<?php
     $u=$_POST['t1'];
     $p=$_POST['t2'];
      if($u=='cdj' && $p=='123')
         printf("wlecome to %s",$u);
      else
         printf("invalid username or pass");
?>