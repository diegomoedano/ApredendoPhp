<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Estrutura de Controles</title>
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
                <h2> Exercício 24 <h2>
                <div class="code">
                    <?php
                $a = 15;
                $b = 25.69;
                $c = "Olá Mundo!";
                $d = TRUE;

                if (is_int($a)) {
                    echo $a . " é um inteiro. <br>";
                }else {
                    echo $a . " não é um interiro. <br>";
                }

                
                if (is_int($b)) {
                    echo $b . " é um inteiro. <br>";
                }else {
                    echo $b . " não é um interiro. <br>";
                }

                
                if (is_int($c)) {
                    echo $c . " é um inteiro. <br>";
                }else {
                    echo $c . " não é um interiro. <br>";
                }

                
                if (is_int($d)) {
                    echo $d . " é um inteiro. <br>";
                }else {
                    echo $d . " não é um interiro. <br>";
                }
                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     