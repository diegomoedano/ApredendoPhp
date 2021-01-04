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
                <h2> Tipos de Dados - Números Inteiros <h2>
                <div class="code">
                    <?php
                    
                    echo 5;
                    echo "<br>";
                    echo -5;
                    echo "<br>";
                    echo 5-12;
                    echo "<br>";
                    $n = 7;
                    echo $n;
                    echo "<br><br>";

                    echo "<h2> Checagem de dados Inteiro <h2>";                       
                    
                     if(is_int($n)){
                         echo "N1 é uma numero inteiro <br>";
                    }; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>