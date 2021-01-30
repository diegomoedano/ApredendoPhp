<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css"/>
    <title>Estrutura de Repetição</title>
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
                <h2> Extrutura For<h2>
                <div class="code">
                    <?php  
                    //contador   / condição //incremento decremento
                    $nome = "Diego";
                    for($i=0; $i<10; $i++){

                        if ($i == 4) {
                            echo $nome . "<br>";
                            continue;
                        }

                        if ($i == 8) {
                            break;
                        }
                        echo "Testando for $i <br>";

                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     