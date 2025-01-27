<?php
     session_start();

  $name=$_SESSION["name"];
  $e=$_SESSION["email id"];
  $sadd=$_SESSION["shipping address"];
  $mp=$_SESSION["mode payment"];

   $price=$_POST["t5"];
   $q=$_POST["t6"];

  echo("<h2> <font color='cyon' face='cambria'> CUSTOMER DETAILS </h2>");

   echo("<h4> <br> Name:".$name);
   echo("<br> Email id:".$e);
   echo("<br> Shipping address:".$sadd);
   echo("<br> Mode payment:".$mp);

  echo("<h2> PURCHASE DETAILS </h2>");

    echo("<br> Price:".$price);
    echo("<br> Quantity:".$q);
    echo("<br> Total Bill:".$price*$q);

?>