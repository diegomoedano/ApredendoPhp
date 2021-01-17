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
                <h2> Exercicio 19 Converter dados para int . <h2>
                <div class="code">
                    <?php                               
                    echo "Atribuiçao += Variável += 10' :<br>";
                    $a = 0;
                    $a += 10;   #$a = $a + 10
                    echo $a . "<br><br>";

                    echo "Atribuiçao -= Variável -= 5' :<br>";
                    $b = 0;
                    $b -= 5;   #$a = $a - 5                
                    echo $b . "<br><br>";

                    echo "Atribuiçao *= Variável *= 2' :<br>";
                    $c = 8;
                    $c *= 8;   #$a = $a * 2
                    echo $c . "<br><br>";

                    
                    echo "Atribuiçao /= Variável /= 2' :<br>";
                    $d = 12;
                    $d /= 4;   #$a = $a / 4
                    echo $d . "<br><br>";

                    
                    echo "Atribuiçao %= Variável %= 2' :<br>";
                    $e = 12;
                    $e %= 2;   #$a = $a % 4
                    echo $e . "<br><br>";


                                     


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>