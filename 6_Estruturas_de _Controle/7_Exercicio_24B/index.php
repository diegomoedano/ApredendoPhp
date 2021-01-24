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
                <h2> Exercício 24 B <h2>
                <div class="code">
                    <?php
                $peso1 = 89.63;
                $peso2 = 80;
                $peso3 = 53;
                $peso4 = 152;

                $pesoIdeal = 80;

                if ($peso1 > $pesoIdeal) {
                    echo "Seu Peso é " . $peso1 . "kg. Voce esta acima do peso. <br>";
                }else {
                    echo "Seu peso é " . $peso1 . "kg. Você está dentro do limite de peso. <br>";
                }

                if ($peso2 > $pesoIdeal) {
                    echo "Seu Peso é " . $peso2 . "kg. Voce esta acima do peso. <br>";
                }else {
                    echo "Seu peso é " . $peso2 . "kg. Você está dentro do limite de peso. <br>";
                }

                if ($peso3 > $pesoIdeal) {
                    echo "Seu Peso é " . $peso3 . "kg. Voce esta acima do peso. <br>";
                }else {
                    echo "Seu peso é " . $peso3 . "kg. Você está dentro do limite de peso. <br>";
                }

                if ($peso4 > $pesoIdeal) {
                    echo "Seu Peso é " . $peso4 . "kg. Voce esta acima do peso. <br>";
                }else {
                    echo "Seu peso é " . $peso4 . "kg. Você está dentro do limite de peso. <br>";
                }
                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     