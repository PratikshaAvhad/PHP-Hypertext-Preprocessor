<html>
 <body>
  <form method='post' action='#'>
  sellect hobbies<br>
  <input type='checkbox' name='c1' value='dancing'>Dancing<br>
  <input type='checkbox' name='c2' value='reading'>Reading<br>
  <input type='checkbox' name='c3' value='coding'>Coding<br>
  <input type='checkbox' name='c4' value='learn new things'>Learn new things<br>
  <input type='checkbox' name='c5' value='bike rideing'>bike rideing<br>
  <input type='submit'>
 </form>
</body>
</html>

<?php
   $h1=$_POST['c1'];
    $h2=$_POST['c2'];
     $h3=$_POST['c3'];
      $h4=$_POST['c4'];
        $h5=$_POST['c5']; 

           printf("selected hobbies=%s%s%s%s%s",$h1,$h2,$h3,$h4,$h5);
?>  