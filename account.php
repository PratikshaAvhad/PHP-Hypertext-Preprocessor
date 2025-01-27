<?php
     $xml=simplexml_load_file("account.xml");
    if($xml==false)
     {
      die("file not found");
     }
    $b=$_REQUEST["t1"];
    $f=0;
    foreach($xml->info as $a)
    {
      if($a->branch==$b)
       {
         $f=1;
          echo("<br>Account no=".$a->acno);
          echo("<br>Nmane=".$a->name);
          echo("<br>Address=".$a->add);
          echo("<br>Account type=".$a->actype);
          echo("<br>Balance=".$a->bal);
       }
     }
     if($f==0)
        echo("branch not found");
?>