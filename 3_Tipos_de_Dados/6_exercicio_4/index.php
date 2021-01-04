<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Instrução de Código</title>
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
                <h2> Tipos de Dados - Exercícios Float <h2>
                <div class="code">
                    <?php
                       echo "<h3> Escrevendo un numero e verificando se é Float</h3>";
                       echo "<br>";
                       echo "<br>";
                       $n1 = 2.2;
                       if(is_float($n1)) {
                        echo "Numero 1 = $n1 é um numero float.<br><br>";
                    }else {
                        echo "Numero 1 = $n1 não é um numero float.<br><br>";
                    }
                       $n2 = 55.8;
                       if(is_float($n2)) {
                        echo "Numero 1 = $n2 é um numero float.<br><br>";
                    }else {
                        echo "Numero 2 = $n2 não é um numero float.<br><br>";
                    }
                       $n3 = 4;
                       if(is_float($n3)) {
                        echo "Numero 3 = $n3 é um numero float.<br><br>";
                    }else {
                        echo "Numero 3 = $n3 não é um numero float.<br><br>";
                    }  

                       
                     ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>