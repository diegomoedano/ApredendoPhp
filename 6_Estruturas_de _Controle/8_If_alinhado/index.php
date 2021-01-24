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
                <h2> If Alinhado <h2>
                <div class="code">
                    <?php

                    if ( 10 > 2){
                        echo "Entrou no primeiro IF <br>";

                        if("teste" == "teste"){
                            echo "Entrou no segundo IF";
                        }
                    }

                    echo "<br><br>";

                    if ( 10 > 2){
                        echo "Entrou no primeiro IF <br>";

                        if("teste" != "teste"){
                            echo "Entrou no segundo IF";
                        }else {
                            echo "Entou no segundo else";
                        }
                    }else {
                        echo "Entrou no primeiro Else";
                    }

                    echo "<br><br>";

                    if ( 10 < 2){
                        echo "Entrou no primeiro IF <br>";

                        if("teste" == "teste"){
                            echo "Entrou no segundo IF";
                        }else {
                            echo "Entou no segundo else";
                        }
                    }else {
                        echo "Entrou no primeiro Else";
                    }



                                    
                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     