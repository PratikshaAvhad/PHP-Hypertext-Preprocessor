<?PHP
     class student
  {
    public $rno;
    public $name;
    public $per;
 
    function accept($rno,$name,$per) // accept value from user
    {
      $this->rno=$rno;
      $this->name=$name;
      $this->per=$per;
    }
     function disp()
    {
     echo("<br>Roll no=".$this->rno);
     echo("<br>Name=".$this->name);
     echo("<br>Percentage=".$this->per); 
    }
 }
  $ob=new student();
    $ob->accept(101,"pratu",81.57);
    $ob->disp();

?>