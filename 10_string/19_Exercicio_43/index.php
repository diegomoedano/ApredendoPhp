<?php
     
     $str = "carro - navio - helicoptero - barco - jangada";

     $strArray = explode("-", $str);

     print_r ($strArray);
     echo "<br>";

     for($i = 0 ; $i < count($strArray); $i++){
         echo ($strArray[$i]) . "<br>";
     }

?>