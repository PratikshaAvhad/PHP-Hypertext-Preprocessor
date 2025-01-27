<?php
     session_start();

  $pname=$_SESSION["name"];
  $padd=$_SESSION["address"];
  $bdate=$_SESSION["birthdate"];
  $mob=$_SESSION["mobile no"];

 $mn=$_POST["t5"];
 $hf=$_POST["t6"];
 $ci=$_POST["t7"];

  echo("<h4> Patient Info </h4>");

  echo("<br> Patient name=".$pname);
  echo("<br> Patient address=".$padd);
  echo("<br> Patient birthdate=".$bdate);
  echo("<br> Patient mobileno=".$mob);

  echo("<h4> Health Details </h4>");

  echo("<br> Medicare no=".$mn);
  echo("<br> Health fund=".$hf);
  echo("<br> Critical Info=".$ci);
?>