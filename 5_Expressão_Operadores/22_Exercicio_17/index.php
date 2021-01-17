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
                <h2> Exercicio 17 - Operador AND. <h2>
                <div class="code">
                    <?php

                    echo "15 > 5 && 'João' === 'João' é verdadeiro? <br><br>";

                    if (15 > 5 && "João" === "João"){
                        echo "Sim é verdadeiro.";
                    }else {
                        echo "Uma ou todas operações é falsa";
                    }
                     
                    echo "<br><br>";

                    echo "'teste' > 5 && 1 é verdadeiro? <br><br>";


                    if ("teste" > 5 && 1){
                        echo "Sim é verdadeiro 1";
                    }else {
                        echo "Uma ou todas operações é falsa";
                    }

                    echo "<br><br>";

                    echo "2 == 3 && 5>= é verdadeiro? <br><br>";


                    if (2 == 3 && 5>= 3){
                        echo "Sim é verdadeiro";
                    }else {
                        echo "Uma ou todas operações é falsa";
                    }




                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>