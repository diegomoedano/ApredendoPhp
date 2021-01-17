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
                <h2> Operador Conversão Cast . <h2>
                <div class="code">
                    <?php                               

                    $a = (int) "12";
                    echo $a . "<br>";
                    echo $a + 12 ."<br>";

                    if($a === 12){
                        echo "A é idêntico a 12 <br>";
                    }
                    
                    $b = (float) "13.14";
                    echo $b . "<br>";
                    echo $b + 12 ."<br>";

                    if($b === 13.14){
                        echo "A é idêntico a 12 <br>";
                    }
                    


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>