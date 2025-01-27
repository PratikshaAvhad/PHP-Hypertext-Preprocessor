<html>
 <body>
  <form method='POST' action='#'>
    <h1> AIR TICKET RESERVATION </h1>
   Name:
   <input type='text' name='t1'><br>
    Address:
   <input type='text' name='t2'><br>
    Contact no:
   <input type='text' name='t3'><br>
    Source:
    <select name='t4'>
      <option value='pune'>Pune</option>
      <option value='shirdi'>Shirdi</option>
      <option value='mumbai'>Mumbai</option>
    </select><br>
    Destination:
     <select name='t5'>
       <option value='nashik'>Nashik</option>
        <option value='goa'>Goa</option>
        <option value='sambhajinagar'>Sambhaji nagar</option>
     </select><br>
   date of journy:
   <input type='date' name='t6'><br>
    Gender:
    <input type='radio' name='t7' value='male'>Male
    <input type='radio' name='t7' value='female'>Female<br>
   No of passengers:
    <input type='number' name='t8'><br>
   Price of per ticket:
    <input type='number' name='t9'><br>
    <input type='submit' value='ok'>
  </form>
 </body>
</html>
<?php
     $name=$_POST['t1'];
     $add=$_POST['t2'];
     $phn=$_POST['t3'];
     $source=$_POST['t4'];
     $des=$_POST['t5'];
     $date=$_POST['t6'];
     $gender=$_POST['t7'];
     $no=$_POST['t8'];
     $price=$_POST['t9']; 
  
    $total=$no*$price;

    echo("<br>name=".$name);
    echo("<br>address=".$add);
    echo("<br>phone=".$phn);
    echo("<br>source=".$source);
    echo("<br>destination=".$des);
    echo("<br>date of journy=".$date);
   echo("<br>gender=".$gender);
   echo("<br>no of passenger=".$no);
    echo("<br>price per ticket=".$price);
   echo("<br>total amt paid=".$total);

?>
   





   

    