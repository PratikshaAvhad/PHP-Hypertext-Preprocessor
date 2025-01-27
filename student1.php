<?php
     $xml=simplexml_load_file("student.xml");
  if($xml==false)
  {
   die("file not found");
  }
   $num=$_REQUEST["t1"];
    $f=0;
   foreach($xml->class as $a)
    {
      if($a->rno==$num)
     {
       $f=1;
       echo("<br>name=".$a->name);
       echo("<br>percentage=".$a->per);
     }
   }
   if($f==0)
     echo("roll no not found");
?>