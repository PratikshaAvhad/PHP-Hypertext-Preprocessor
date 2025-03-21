<html>
 <body>
  <form method="POST" action="<?php echo($_SERVER['PHP_SELF']);?>">
    Enter indian currency:
     <input type="text" name="t1"><br>
     <input type="radio" name="r1" value="dollor">Doller<br>
     <input type="radio" name="r1" value="pounds">Pounds<br>
   <input type="submit" value="check">
  </form>
 </body>
</html>

<?php
     $rs=$_REQUEST["t1"];
     $ch=$_REQUEST["r1"];

     if($ch=="doller")
        echo("<br>RS in Doller=".$rs/86);
     if($ch=="pounds")
        echo("<br>Rs in Pounds=".$rs/104);
?>
      