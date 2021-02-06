<?php
    $a = 10;
    $b = 7;

    function testeEscopo(){
        $a = 5;
        echo "Escopo Local de A: $a <br>";
        global $b;
        echo "Escopo Local usando variavel global de B: $b <br>";
        static $c = 0;
        $c++;
        echo "Escopo Static de C: $c <BR>";

    }
    echo "Escopo Global de A: $a <br>";
    testeEscopo();
    testeEscopo();
    testeEscopo();
?>