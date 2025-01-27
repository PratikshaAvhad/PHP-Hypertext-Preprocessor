<?php
     $xml=simplexml_load_file("item.xml");
    if($xml==false)
   {
     die("file note found");
   }
   echo("<h1>Mauli shop</h1>");
   echo("<table border='1'>");
   echo("<tr><th>Item no");
  echo("<th>Item name");
  echo("<th>Item quantity");
  echo("<th>Item rate");
  echo("<th>Total");
  echo("</tr>");
  $s=0;
   foreach($xml->info as $a)
   {
     echo("<tr><td>".$a->ino);
     echo("<td>".$a->iname);
     echo("<td>".$a->qty);
     echo("<td>".$a->rate);
        $t=$a->rate*$a->qty;
        $s=$s+$t;
          echo("<td>".$t);
          echo("</tr>");
   }
    echo("<tr><td colspan=5>TOtal amount=".$s);
?> 
    
 
   
    
 