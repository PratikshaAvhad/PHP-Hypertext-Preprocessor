<html>
   <body>
   <form action="#" method="post">
                                                                                                                      
        Enter first string :
           <input type="text" name="t1"><br>
                                                                                                                             
        Enter second string:
         <input type="text" name="t2"><br>
                                                                                                                             
        Enter position:
         <input type='text' name="t3"><br>
                                                                                                                             
           <input type="radio" name="ch" value=1> compare <br>
            <input type="radio" name="ch" value=2> compare with datatype <br>
             <input type="radio" name="ch" value=3> append <br>                                                                                                              
             <input type="radio" name="ch" value=4> reverse <br>
              <input type="submit" value="check">     
                <input type="reset" value="cancel">

    </form>
  </body>
</html>

<?php
        $s1=$_POST['t1'];
        $s2=$_POST['t2'];
        $pos=$_POST['t3'];
        $ch=$_POST['ch'];

        echo("<br>First string=".$s1);
        echo("<br>Second string=".$s2);
        echo("<br>reverse=".$pos);
        echo("<br>choice is=".$ch);
                                                                                                                             
        switch($ch)
   {
     case 1:if($s1==$s2)
              echo("<br>both strings are equal");
            else
              echo("<br>strings are not equal");
            break;

     case 2:if($s1===$s2)
               echo("<br>both strings datatype are exact equal");
            else
               echo("<br>both datatype are not equal");
            break;

     case 3:echo("<br>after appending ");
            echo("$s1.$s2");
            break;

     case 4:$s3=substr($s1,2);
            $s1=strrev($s3);
            echo("reverse  string=".$s1);
    }

?>
      