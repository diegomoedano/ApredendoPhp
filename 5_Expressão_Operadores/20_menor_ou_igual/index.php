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
                <h2> Operador Menor e Menor Igual a Que. <h2>
                <div class="code">
                    <?php

                    echo "Operador Menor que '<' <br><br>";

                    $a = 32;
                    $b = 28;
                    $c = 28;
                    $d = 28;
                    $e = 42;
                    if ($a < $b) {
                        echo "$a é menor que $b <br><br>";
                    }else {
                        echo "$a não é menor que $b<br><br>";
                    }  
                    
                    if ($b < $a) {
                        echo "$b é menor que $a <br><br>";
                    }else {
                        echo "$b não é menor que $a<br><br>";
                    }    

                    echo "Operador menor igual que '>=' <br><br>";
                    
                    if ($c >= $d) {
                        echo "$c é menor ou igual que $d <br><br>";
                    }else {
                        echo "$c não é menor ou igual que $d";
                    }

                    
                  
                    if ($a >= $e) {
                        echo "$a é menor ou igual que $e <br><br>";
                    }else {
                        echo "$a não é menor ou igual que $e";
                    }


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>