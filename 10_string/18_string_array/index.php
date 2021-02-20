<?php

    $frase = "Testando o explode";

    $fraseArray = explode(" ", $frase);
    print_r ($fraseArray);

    echo "<br>";

    $frase2 = "Carro, Avião, Bicicleta, navio";

    $fraseArray2 = explode(",", $frase2);
    print_r ($fraseArray2);
    
    echo "<br>";


    for($i = 0; $i < count($fraseArray2); $i++)
        echo $fraseArray2[$i] . "<br>";
?>