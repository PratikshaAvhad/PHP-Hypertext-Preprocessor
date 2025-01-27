<?php
     $xml=simplexml_load_file("book.xml");
    if($xml==false)
    {
      die("file not found");
    }
     $writer=$_REQUEST["t1"];
     $f=0;
      foreach($xml->language as $a)
     {
       if($a->author==$writer)
       {
         $f=1;
        echo("<table border='1'>");
        echo("<tr><th> BookCode <th> BookName <th> Author <th> year <th> Price </tr>");
         {
          echo("<tr><td>".$a->bookcode);
          echo("<td>".$a->bookname);
          echo("<td>".$a->author);
          echo("<td>".$a->year);
           echo("<td>".$a->price);
           echo("</tr>");
         }
        echo("</table>");
       }
    }
       if($f==0)
         echo("author not found");
?>

    
     
