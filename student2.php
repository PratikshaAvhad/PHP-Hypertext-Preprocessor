<?php
     $xml=simplexml_load_file("student.xml");
    if($xml==false)
    {
      die("file not found");
    }
     foreach($xml->class as $a)
     {
       echo("<br>Names of Student=".$a->name);
     }
 ?> 