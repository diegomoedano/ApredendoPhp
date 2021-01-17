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
                <h2> Exercicio 18. <h2>
                <div class="code">
                    <?php

                    echo "A operação (12 < 5 OR 'João' === 'João') é verdadeira?<br><br>";

                    if (12 < 5 OR "João" === "João"){
                        echo "A Operação é verdadeira. <br><br>";
                    }else {
                        echo "A Operação é falsa. <br><br>";
                    }

                    echo "A operação (1 > 5 OR 1) é verdadeira?<br><br>";

                    if (1 > 5 OR 1){
                        echo "A Operação é verdadeira. <br><br>";
                    }else {
                        echo "A Operação é falsa. <br><br>";
                    }
                     
                    
                    echo "A operação (20 === '20' && 51 >=31) é verdadeira?<br><br>";

                    if (20 === "20" && 51 >=31){
                        echo "A Operação é verdadeira. <br><br>";
                    }else {
                        echo "A Operação é falsa. <br><br>";
                    }




                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>