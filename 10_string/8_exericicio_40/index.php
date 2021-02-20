<?php
$str = "O Rato roeu a roupa do rei de Roma.";
 $n = 0;
for($i = 0; $i < strlen($str); $i++){
    
    if ($str[$i] === "a") {
       
        $n++;
          
    }
    
}
echo "o numero de a s na frase é de : $n";

?>
