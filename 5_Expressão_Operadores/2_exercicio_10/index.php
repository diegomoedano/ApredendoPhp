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
                <h2> Exercício 10 <h2>
                <div class="code">
                    <?php
                        echo "Subtração / Divisão / Multiplicação armazenando em uma variável e imprimindo.";
                        echo "<br>";
                        $a = 6;
                        $b = 2;
                        $c = 10;

                        $total = ($a - $b) * $c;
                        echo $c;
                        echo "<br><br>";

                        
                        
                        
                        
                        echo "Subtração de duas variaveis dentro de uma função";
                        echo "<br>";
                        function sub($a,$b){
                            echo $a - $b;
                        }
                        sub(5,2);

                        echo "<br><br>";
                        echo "Divisão de duas variaveis dentro de uma função";
                        echo "<br>";
                        function div($a,$b){
                            echo $a / $b;
                        }
                        div(10,2);

                        echo "<br><br>";
                        echo "Multiplicação de duas variaveis dentro de uma função";
                        echo "<br>";
                        function mult($a,$b){
                            echo $a * $b;
                        }
                        mult(10,2);
                        
                        echo "<br><br>";
                        echo "Soma de duas variaveis dentro de uma função";
                        echo "<br>";
                        function soma($a,$b){
                            echo $a + $b;
                        }
                        soma(10,2);

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>