<?php
     $xml=simplexml_load_file("student.xml");
  if($xml==false)
  {
   die("file not found");
  }
   foreach($xml->class as $a)
   {
      if($a->per>=70)
      $f=0;
     {
       $f=1;
       echo("<br>name=".$a->name);
       echo("<br>Roll no=".$a->rno);
       echo("<br>percentage=".$a->per);
     }
     if($f==0)
       echo("anyone doesnt have per>=70");
  }

?>