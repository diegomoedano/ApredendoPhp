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

                    $a = (int) "testando";
                    echo "Testando se a string virou inteiro: <br>";
                    if (is_int($a)){
                        echo "$a :  é um INTEIRO <br><br>";
                    }

                    $b = (int) 12.9;
                    echo "Testando se um float virou inteiro: <br>";
                    if (is_int($b)){
                        echo "$b :  é um INTEIRO <br><br>";
                    }

                    $c = (int) [1, 2, 3];
                    echo "Testando se um array virou inteiro: <br>";
                    if (is_int($c)){
                        echo "$c :   é um INTEIRO <br><br>";
                    }

                    $d = (int) true;
                    echo "Testando se um booleano virou inteiro: <br>";
                    if (is_int($d)){
                        echo "$d :  é um INTEIRO <br><br>";
                    }

                                     


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>