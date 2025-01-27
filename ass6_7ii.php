<?php
     session_start();

  if(time()-$_SESSION["page2_time"]>100)
  {
    session_unset();
    session_destroy();
    header("location:ass6_7.php");
  }
   $_name=$_SESSION["name"];
   $_address=$_SESSION["address"];
   $_mobile=$_SESSION["mobile no"];
   $_bdate=$_SESSION["birth date"];

   $fname=$_POST["t1"];
   $s=$_POST["t2"];
   $d=$_POST["t3"];
   $dd=$_POST["t4"];
   $dt=$_POST["t5"];
   $c=$_POST["t6"];

  echo("<h4> Customer Details </h4>");
   echo("<br> Name=".$name);
   echo("<br> Address=".$add);
   echo("<br> Birth date=".$bdate);
   echo("<br> Mobile no=".$mob);

  echo("<h4> Flight Details </h4>");
   echo("<br> Flight name=".$fname);
    echo("<br> Source=".$s);
    echo("<br> Destination=".$d);
   echo("<br> Departure date=".$dd);
    echo("<br> Departure time=".$dt);
    echo("<br> Charges=".$c);
?>