<html>
 <body>
   <form method="POST" action="#">
   enter item code:
    <input type="text" name="t1"><br>
   enter item name:
    <input type="text" name="t2"><br>
   enter unit sold:
    <input type="text" name="t3"><br>
   enter item rate:
    <input type="text" name="t4"><br>
   <input type="submit" value="bill">
   </form>
  </body>
</html>

<?php
     $c=$_POST["t1"];
     $n=$_POST["t2"];
     $s=$_POST["t3"];
     $r=$_POST["t4"];

    echo("<br> Item code=".$c);  
    echo("<br> Item name=".$n);  
    echo("<br> Item sold unit=".$s);  
    echo("<br> Item rate=".$r);  
    echo("<br> total item's bill=".$r*$s);  

?>