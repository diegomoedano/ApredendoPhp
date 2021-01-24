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
                <h2> Exercício 25 <h2>
                <div class="code">
                    <?php
                    $a = 200;
                    $b = "Gol";
                    $c = 25.9;
                    $d = "Teste";

                    if(is_numeric($a)){
                        $mult = $a * 2;
                        if($mult > 100){
                            echo "O número é maior que 100.<br>";
                        }else {
                            echo "O número é menor que 100.<br>";
                        }
                    }else {
                        echo "Não é um numero";
                    }

                    echo "<br><br>";

                    if(is_numeric($b)){
                        $mult = $b * 2;
                        if($mult > 100){
                            echo "O número é maior que 100.<br>";
                        }else {
                            echo "O número é menor que 100.<br>";
                        }
                    }else {
                        echo "Não é um numero";
                    }

                    echo "<br><br>";
                
                    if(is_numeric($c)){
                        $mult = $c * 2;
                        if($mult > 100){
                            echo "O número é maior que 100.<br>";
                        }else {
                            echo "O número é menor que 100.<br>";
                        }
                    }else {
                        echo "Não é um numero";
                    }

                    echo "<br><br>";

                    if(is_numeric($d)){
                        $mult = $d * 2;
                        if($mult > 100){
                            echo "O número é maior que 100.<br>";
                        }else {
                            echo "O número é menor que 100.<br>";
                        }
                    }else {
                        echo "Não é um numero";
                    }
                
                
                
                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     