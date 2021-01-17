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
                <h2> Exercicio 16 <h2>
                <div class="code">
                    <?php
                    echo "Valores 5 e 3 usando operadores Igualdade, diferença, identico e não identico '!=' <br><br>";
                    $a = 5;
                    $b = 3;
                    echo "Variavel A = $a <br>";
                    echo "Variavel B = $b <br>";
                    echo "<br><br>";

                    echo "Igualdade: <br><br>";
                    if($a == $b){
                        echo "A e B São Iguais (TRUE";
                    }else {
                        echo "A e B não são Iguais";
                    }


                    echo "<br><br>";
                    echo "Diferença:";
                    echo "<br><br>";
                    if($b != $a){
                        echo "A é diferente de B";
                    }else {
                        echo "A e B não são diferentes";
                    }
                    
                    
                    echo "<br><br>";
                    echo "Identico";
                    echo "<br><br>";                                 
                    if($b === $a){
                        echo "A é identico B";
                    }else {
                        echo "A e B não são identico";
                    }
                    
                    
                    echo "<br><br>";
                    echo "Não Identico";
                    echo "<br><br>";
                    if($b !== $a){
                        echo "A não é identico B";
                    }else {
                        echo "A e B são identico";
                    }


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>