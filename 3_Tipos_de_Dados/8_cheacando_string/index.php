<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Tipos de Dados</title>
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
                <h2> Tipos de Dados - Checando String <h2>
                <div class="code">
                    <?php
                       echo "Olá estou utilizando if e else.<br>";
                       echo "<br>";                       
                       $a = "Diego Moedano";
                       if(is_string($a)){
                           echo "$a : Isto é uma string<br><br>";
                       }else{
                           echo "$a : Não é uma string<br><br>";
                       }

                       $b = 12;
                       if(is_string($b)){
                           echo "$b : Isto é uma string";
                       }else{
                           echo "$b : Não é uma string";
                       }


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>