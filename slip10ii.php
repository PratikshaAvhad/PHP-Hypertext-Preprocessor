<?php

   session_start();

  $name=$_SESSION["name"];
  $add=$_SESSION["address"];
  $phon=$_SESSION["mobile"];

  $pname=$_POST["t4"];
  $rate=$_POST["t5"];
  $qunt=$_POST["t6"];

  echo("<h2> Customer Details </h2>");

  echo("<br> Customer name=".$name);
  echo("<br> Customer address=".$add);
  echo("<br> Customer mobile=".$phon);

  echo("<h2> Product Details </h2>");

  echo("<br> Product name=".$pname);
  echo("<br> Product rate=".$rate);
  echo("<br> Product quantity=".$qunt);
  
  echo("<h2> Total </h2>");

  echo("<br> Total Bill=".$rate*$qunt);

?>
  