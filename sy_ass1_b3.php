<?php
  class temperature
    {
      public $cel,$f;
        function __construct($cel,$f)
       { 
          //convert celsius to fahrenheit
              $t=($cel*9/5)+32;
              echo("<br>convert celsius to fahrenheit= ".$t);

         //convert  fahrenheit to celsius 
              $t=($f-32)*5/9;
              echo("<br>convert celsius to fahrenheit= ".$t);
        }
     }
   $ob=new temperature(45.34,26.84);
?>