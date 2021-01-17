<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Expressão e Operadores</title>
    <style>
    
    .container{
        width: 100vw;
        height: 100vh;
        background: #6C7A89;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center
    }
    .centro{
        margin: 0 auto;
        width: 500px;
        height: auto;
        background: #fff;
        padding: 5px;
        color: 000;
        display: flex;
        justify-content: center;
        border-radius: 4%;
}
    .titulo{
    text-align: center;
    font-size: 1.5rem;
    color: red;
    }
    .code{
    text-align: center;
    font-size: 1rem;
    color: #000;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="centro">
           <div class="titulo">
                <h2> Operador OR "OU" "||". <h2>
                <div class="code">
                    <?php

                    echo "Operação 1: (5 > 2 || 3<4) é verdadeira ou falsa?  <br><br>";

                    if(5 > 2 || 3 < 4){
                       echo "Operação 1 Verdadeira <br><br>";     
                    }else {
                        echo "Operação 1 False <br><br>";
                    }

                    
                    echo "Operação 2 (5 > 2 || 30 < 4 ) é verdadeira ou falsa?  <br><br>";

                    if(5 > 2 || 30 < 4){
                       echo "Operação 2 Verdadeira <br><br>";     
                    }else {
                        echo "Operação 2 False <br><br>";
                    }

                    
                    echo "Operação 3: (5 > 20 || 3<4) é verdadeira ou falsa?  <br><br>";

                    if(5 > 20 || 3 < 4){
                       echo "Operação 3 Verdadeira <br><br>";     
                    }else {
                        echo "Operação 3 False <br><br>";
                    }

                    echo "Operação 3: (5 > 20 || 30<4) é verdadeira ou falsa?  <br><br>";

                    if(5 > 20 || 30<4){
                       echo "Operação 4 Verdadeira <br><br>";     
                    }else {
                        echo "Operação 4 False <br><br>";
                    }

                    $a = 10;
                    $b = 20;
                    $c = 30;
                    $d = 40;

                    echo "Operação 5: Variaveis ($a > $b || $d > $c) é verdadeira ou falsa?  <br><br>";

                    if ($a > $b || $d > $c) {
                        echo "Operação 5 Verdadeira <br><br>";     
                    }else {
                        echo "Operação 5 False <br><br>";
                    }

                    echo "Operação 6: Variaveis (($a > $b || $d > $c) && $c < $d) é verdadeira ou falsa?  <br><br>";

                    if (($a > $b || $d > $c) && $c > $d) {
                        echo "Operação 6 Verdadeira <br><br>";     
                    }else {
                        echo "Operação 6 False <br><br>";
                    }








                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>