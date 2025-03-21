<?php
     $xml=simplexml_load_file("sy_ass3_p3.xml");
    if($xml==false)
    {
      die("file not found");
    }
    echo("<table border='1'>");
     echo("<tr><th> BookCode <th> BookName <th> Author <th> year <th> Price </tr>");
     foreach($xml->language as $a)
    {
      echo("<tr><td>".$a->bookcode);
       echo("<td>".$a->bookname);
       echo("<td>".$a->author);
       echo("<td>".$a->year);
      echo("<td>".$a->price);
      echo("</tr>");
    }
     echo("</table>");
?>

    
     
