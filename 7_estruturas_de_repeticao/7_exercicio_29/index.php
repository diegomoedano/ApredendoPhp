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
                <h2> Exercicio 29<h2>
                <div class="code">
                    <?php  
                $n = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
                $i = 0;
                while ($i < count($n)) {
                   

                    if($n[$i] == 30 ||$n[$i] == 40){
                        $i++;
                        continue;
                    }

                echo "Elemento do array $n[$i]<br>";



                $i++;
                }
                  


                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     