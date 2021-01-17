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
                <h2> Operador Not ! . <h2>
                <div class="code">
                    <?php

                    echo "A Operação 1 verdadeira ou falsa: (!(5>2)) <br>";

                   if (!(5>2)) {
                       echo "Operação 1 Verdadeira <br>";
                       
                   }else{
                       echo "Operação 1 Falsa<br>";

                   }

                   echo "<br><br>";

                   echo "A Operação 2 verdadeira ou falsa: (!(65>200)) <br>";
                   if (!(65>200)) {
                    echo "Operação 2 Verdadeira <br>";
                    
                }else{
                    echo "Operação 2 Falsa<br>";

                }

                    


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>