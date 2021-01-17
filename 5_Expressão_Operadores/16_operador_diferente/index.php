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
                <h2> Operador de Diferença <h2>
                <div class="code">
                    <?php
                    echo "Operador de Diferença '!=' <br><br>";

                    $a = 5;
                    $b = 6;
                    echo "Variavel A = $a <br>";
                    echo "Variavel B = $b <br>";

                    if($a != $b){
                        echo "São Dieferentes";
                    }else {
                        echo "Não são Diferente";
                    }

                    echo "<br><br>";
                    $c = 7;
                    $d = 7;
                    echo "Variavel C = $c <br>";
                    echo "Variavel D = $d <br>";

                    if($c != $d){
                        echo "são Dieferentes";
                    }else {
                        echo "Não são Diferente";
                    }


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>