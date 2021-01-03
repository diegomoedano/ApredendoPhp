<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Instrução de Código</title>
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
                <h2> Comentários de Código <h2>
                <div class="code">
                    <?php
                        echo "Aqui existe um comentario de 1 linha # ou //";
                        //Aqui tem um comentário
                        #Outro Tipo de Comentario
                        echo "<br><br>";
                        echo "Aqui um comentario de varias linhas  /*   */";
                        /*Comentário de
                        multi linhas */
                      
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>