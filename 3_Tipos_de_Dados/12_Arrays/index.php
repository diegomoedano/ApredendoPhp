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
                <h2> Tipos de Dados - Arrays <h2>
                <div class="code">
                    <?php
                       $a = [1,2,3,4,5,6];
                       $arr = ["Diego", 12, true];
                       print_r ($a); 
                       print_r($arr);
                       echo "<br>";
                       echo "<br>";
                       echo "O Comando Echo não imprime array mas sim seus indices <br><br>";               
                       echo "<br>";
                       echo $a[0];
                       echo "<br>";
                       echo $a[3];
                       echo "<br>";
                       echo $a[5];

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>