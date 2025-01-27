<?php
     $xml=simplexml_load_file("student.xml");
  if($xml==false)
   {
     die("file not found");
   }
   echo("<table border='1'>");
   echo("<tr><th> ROll NO <th> NAME <th> PERCENTAGE </tr>");
  foreach($xml->class as $a)
   {
     echo("<tr><td>".$a->rno);
     echo("<td>".$a->name);
     echo("<td>".$a->per);
     echo("</tr>");
   }
   echo("</table>");
?>