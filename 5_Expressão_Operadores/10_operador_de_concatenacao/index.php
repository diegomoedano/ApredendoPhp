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
        width: 400px;
        height: 400px;
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
                <h2> Operador de Exponenciação <h2>
                <div class="code">
                    <?php

                    echo "Concatena com '.'";
                    echo"<br><br>";

                    $nome = "Diego";
                    $sobrenome = "Moedano";

                    echo "Nome " . $nome . " e Sobrenome " . $sobrenome;
                    echo"<br><br>";
                    $marca = "Ferrari";
                    $motor = "3.0";
                    $vel_max = 200;
                    echo "O Carro da " . $marca . " tem um motor " . $motor . " e sua velociadade maxima é de " . $vel_max . "km/h";


                       
                       
                       
                        


                        
                 

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>