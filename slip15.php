<html>
  <body>
   <form method="POST" action="#">
  enter competition name:
   <input type="text" name="t1"><br>
  <input type="submit" value="1st rank">
  </form>
 </body>
</html>
<?php
     $con=mysqli_connect("localhost","root","");
   if($con==false)
     die("error in connection");

  mysqli_select_db($con,"slip");
   
  $name=$_POST["t1"];

  $res=mysqli_query($con,"select student.* from student,comp,sc
                    where student.sno=sc.sno
                    and comp.cno=sc.cno
                    and rank=1 and cname='$name'");

 while($row=mysqli_fetch_array($res))
  {
    echo("<br> Sno=".$row[0]); 
    echo("<br> Name=".$row[1]); 
    echo("<br> Class=".$row[2]); 
  }

  mysqli_close($con);

?>