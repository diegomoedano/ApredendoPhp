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
                <h2> Extrutura Switch <h2>
                <div class="code">
                    <?php                  

                    $x = 2;

                    switch ($x) {
                        case 0:
                            echo "X = 0 <br>";
                            break;

                        case 1:
                            echo "X = 1 <br>";
                            break;
                        
                        default:
                            echo "X = diferente dos valores dos CASES";
                            break;
                    }
                    
                
                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     