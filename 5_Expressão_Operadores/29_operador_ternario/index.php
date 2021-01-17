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
                <h2> Operador Ternário ? Condição : Condição <h2>
                <div class="code">
                    <?php                               
                   
                   echo 20 > 10 ? "Deu True <br>" : "Deu False <br>";
                   echo 20 < 10 ? "Deu True <br>" : "Deu False <br>";
                   $a = 5;
                   $b = 8;

                   echo $a > $b ? "Deu True <br>" : "Deu False <br>";
                   echo $a < $b ? "Deu True <br>" : "Deu False <br>";

                   echo $a === $b && 10 > 5 ? "Deu True <br>" : "Deu False <br>";





                                     


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>