<html>
 <body>
  <form method="POST" action="#">
   Enter Teacher Name:
    <input type="text" name="t1"><br>
   <input type="submit" value="ok">
  </form>
 </body>
</html>

<?php
     $con=mysqli_connect("localhost","root","");
      if($con==false)
         die("error in connection");

   mysqli_select_db($con,"slip");

    $tn=$_POST["t1"];

    $k=mysqli_query($con,"select sname,sub from stud1,teacher,st
                     where stud1.sno=st.sno
                      and teacher.tno=st.tno
                      and tname='ram'");

         while($row=mysqli_fetch_array($k))
           {
             echo("<br>student name=".$row[0]);
             echo("<br>student subject=".$row[1]);
           }
    mysqli_close($con);

?>
  