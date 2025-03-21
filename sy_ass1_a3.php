<?php
   class calculator
 {
   public $a,$b;
   function __construct($a,$b)
   {
     $this->a=$b;
     $this->b=$b;
   }
   function add()
   {
     return $this->a+$this->b;
   }
   function sub()
   {
     return $this->a-$this->b;
   }
   function mul()
   {
     return $this->a*$this->b;
   }
   function div()
   {
     return $this->a/$this->b;
   }
}
  $cal=new calculator(2,2);

   echo("addition=".$cal->add());
   echo("<br>substraction=".$cal->sub());
   echo("<br>multiplication=".$cal->mul());
   echo("<br>division=".$cal->div());
?>