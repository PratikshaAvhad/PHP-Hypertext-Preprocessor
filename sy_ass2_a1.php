<html>
   <body>
     <form method="post" action="#">
         Enter name:
           <input type="text"  name="t1" ><br>
       select cities name you would  to visit them:
        <select name="s1[]" multiple>
          <option> pune</option>
         <option>nashik</option>
         <option>mumbai</option>
          <option>shrirdi</option>
      </select>     <br>
       <input type="submit" value="ok"> 
   </form>
  </body>
</html>
<?php 
   $s=$_POST["t1"];
   $a=$_POST["s1"];
    echo("<br> Name=".$s);
  
     foreach($a as $f)
          
           echo("<br>".$f);

?>