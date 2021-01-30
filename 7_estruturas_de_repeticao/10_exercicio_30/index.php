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
                <h2> Exercicio 30<h2>
                <div class="code">
                    <?php  

                    $arry = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
                    
                    for($i=0; $i < count($arry); $i++){
                        if($arry[$i] % 2 === 0 ){
                            echo "testando $arry[$i]<br>";
                        }
                        
                        
                    }
               
                  


                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     