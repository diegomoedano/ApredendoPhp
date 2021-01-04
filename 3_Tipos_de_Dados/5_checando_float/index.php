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
                <h2> Tipos de Dados - Checando Float <h2>
                <div class="code">
                    <?php
                       $a = "teste";
                       $b = 12.8;
                       
                       if(is_float($a)){
                           echo "$a É um numero Float <br> <br>";
                       }else {
                           echo "$a Não é um float.<br> <br>";
                       }
                    
                       
                       if(is_float($b)){
                        echo "$b É um numero Float";
                    }else {
                        echo "$b Não é um float.";
                    }
                       
                     ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>