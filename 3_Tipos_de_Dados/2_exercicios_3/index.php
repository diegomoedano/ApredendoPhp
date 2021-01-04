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
                <h2> Exercício - Imprima três numeros inteiros <h2>
                <div class="code">
                    <?php
                        echo "Imprimindo através de uma váriavel";
                        echo "<br><br>";
                        $n1 = 7;
                        $n2 = 8;
                        $n3 = 9;
                        echo "Os numero das váriaveis são: 
                        <br> N1 = $n1 <br> N2 = $n2 <br>N3 = $n3";

                                       
                      
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>