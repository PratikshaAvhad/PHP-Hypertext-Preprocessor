<html>
 <body>
  <form method='POST' action='#'>
    Enter mobile no:
     <input type='text' name='t1'><br>
      <input type='submit' value='ok'>
  </form>
 </body>
</html>
 <?php
      $no=$_POST["t1"];
     if(filter_var($no,FILTER_VALIDATE_INT))
      {
        if(strlen($no)==10)
            echo("valid mobile no=".$no);
        else
            echo("mobile no contains should be in 10 digits");
      }
     else
      {
        echo("mobile no contains only in digits");
      }
?>   