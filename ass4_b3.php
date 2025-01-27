<?php
     class book
    {
      public $bid;
      public $name;
      public $publication;
      public $author;
      public $price;

    function accept($bid,$name,$publication,$author,$price)
  {
    $this->name=$bid;
    $this->color=$name;
    $this->price=$publication;
    $this->color=$author;
    $this->color=$price;
  }
   function disp()
  {
    echo("<br> book id=".$this->bid); 
    echo("<br> book name=".$this->name); 
    echo("<br> publication=".$this->publication);
    echo("<br> book author=".$this->author); 
    echo("<br> book price=".$this->price); 
  }
 } 
   $ob=new book();
    $ob->accept(101,"PHP","nirali","n.k.narayan",801);
      $ob->disp();

?>