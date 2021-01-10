<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Variáveis</title>
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
                <h2> Variável - Escopo Global<h2>
                <div class="code">
                    <?php
                    $x = "Global 1 ";
                    echo $x;
                    echo "<br><br>";
                    if(5>2){
                        $x = "Global 2 no if";
                        echo "$x";
                    }
                    echo "<br><br>";
                    echo "$x - Mesmo Fora do if";
                    echo "<br><br>";
                    
                    function funcao(){
                        $x = "dentro da função sem ser global";
                        echo $x;
                    }

                    funcao();
                    echo "<br><br>";
                    function funglobal(){
                        global $x;
                        echo  "$x global função";
                    }
                    echo "<br><br>";
                    funglobal()

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>