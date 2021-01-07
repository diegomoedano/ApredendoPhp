<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Tipo de Dados</title>
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
                <h2> Tipos de Dados - Exercicios 7 <h2>
                <div class="code">
                    <?php

                    $pessoa = [
                        "Nome" => "Diego",
                        "Idade" => 18,
                        "Cidade" => "Ribeirão Preto"
                    ];
                    $nome = $pessoa["Nome"];
                    $idade = $pessoa["Idade"];
                    $cidade = $pessoa["Cidade"];
                    
                    if ($idade >= 18) {
                        echo "Parabéns $nome da cidade $cidade você tem $idade anos então pode entrar.";
                    }else {
                        echo "$nome, você é menor de idade não pode entrar.";
                    }

                
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>