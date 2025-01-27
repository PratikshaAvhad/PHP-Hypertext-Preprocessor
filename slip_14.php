<html>
  <body>
    <form method="POST" action="#">
   Enter actor name:
    <input type="text" name="t1"><br>
   Enter movie name:
    <input type="text" name="t2"><br>
  <input type="radio" name="t3" value="a">Display movie name<br>
  <input type="radio" name="t3" value="b">Insert info<br>
  <input type="radio" name="t3" value="c">Display Update<br> 
  <input type="submit">
  </form>
 </body>
</html>

<?php
      $con=mysqli_connect("localhost","root","");
  if($con==false)
     die("error in connection");

    mysqli_select_db($con,"slip");

   $an=$_POST["t1"];
   $mon=$_POST["t2"];
   $ch=$_POST["t3"];
   switch(ch)
   {
     case "a":$k=mysqli_query($con,"select mname from movie,actor,ma
                                where movie.mno=ma.mno
                                and actor.ano=ma.ano
                                 and aname='$an'");
                               
                                 while($row=mysqli_fetch_array($k))
                                 {
                                    echo("<br> movie name=".$row[0]);
                                 }
                                 break;

    case "b":mysqli_query($con,"insert into movie values(4,'gadar',2024)");
              break;

    case "c":mysqli_query($con,"update movie set rel_year='2021'
                               where mname='$mon'");
                               break;
   }
    mysqli_close($con);
?>
