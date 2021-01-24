<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Exercício 26</title>
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
                <h2> Exercício 26 <h2>
                <div class="code">
                    <?php

                    $vel = 30;
                    $vel1 = 40;
                    $vel2 = 80;
                    $vel3 = "5";

                    if($vel < 40){
                        echo "Esta na velocidade correta.";
                    }elseif ($vel == 40 ) {
                        echo "Cuidado velocidade máximo permitido.";
                    }elseif ($vel > 40){
                        echo "Velocidade acima do permitido MULTADO.";
                    }else{
                        echo "velocidade não encontrada";
                    }

                    echo "<br><br>";

                    
                    if($vel1 < 40){
                        echo "Esta na velocidade correta.";
                    }elseif ($vel1 == 40 ) {
                        echo "Cuidado velocidade máximo permitido.";
                    }elseif ($vel1 > 40){
                        echo "Velocidade acima do permitido MULTADO.";
                    }else{
                        echo "velocidade não encontrada";
                    }

                    echo "<br><br>";
                    if($vel2 < 40){
                        echo "Esta na velocidade correta.";
                    }elseif ($vel2 == 40 ) {
                        echo "Cuidado velocidade máximo permitido.";
                    }elseif ($vel2 > 40){
                        echo "Velocidade acima do permitido MULTADO.";
                    }else{
                        echo "velocidade não encontrada";
                    }

                    echo "<br><br>";

                    if($vel3 < 40){
                        echo "Esta na velocidade correta.";
                    }elseif ($vel3 == 40 ) {
                        echo "Cuidado velocidade máximo permitido.";
                    }elseif ($vel3 > 40){
                        echo "Velocidade acima do permitido MULTADO.";
                    }else{
                        echo "velocidade não encontrada";
                    }
                
                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     