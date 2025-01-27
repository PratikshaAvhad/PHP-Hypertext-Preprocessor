<?php

   function swap($a,$b)
{
  $t=$a;
  $a=$b;
  $b=$t;
}

  $a=10;
  $b=20;

   echo("<br> before  swap value: a=$a, b=$b" );
   swap($a,$b);
   echo("<br> after swap value: a=$a, b=$b" );

?>
