<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Estrutura de Controles</title>
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
                <h2> Exercício 23 <h2>
                <div class="code">
                    <?php
                    $idade1 = 23;
                    $idade2 = 18;
                    $idade3 = 15;
                    $idade4 = 17;

                    $marioridade = 18;

                    $maior = "Você é maior de idade. Sua idade é: ";
                    $menor = "Você não é maior de idade. Sua idade é: ";
                     
                    if ($idade1 >= $marioridade){
                        echo $maior . "$idade1 anos.<br>";
                    }else{
                        echo $menor . "$idade1 anos.<br>";

                    }

                    echo "<br><br>";

                    if ($idade2 >= $marioridade){
                        echo $maior . "$idade2 anos.";
                    }else{
                        echo $menor . "$idade2 anos.";

                    }

                    echo "<br><br>";
                    
                    if ($idade3 >= $marioridade){
                        echo $maior . "$idade3 anos.";
                    }else{
                        echo $menor . "$idade3 anos.";

                    }

                    echo "<br><br>";

                    
                    if ($idade4 >= $marioridade){
                        echo $maior . "$idade4 anos.";
                    }else{
                        echo $menor . "$idade4 anos.";

                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     