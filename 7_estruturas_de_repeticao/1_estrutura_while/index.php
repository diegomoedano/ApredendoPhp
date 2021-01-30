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
                <h2> Extrutura while <h2>
                <div class="code">
                    <?php   
                    $x = 0; // Definição do contador

                    //Inicio / Definição da estrutura
                    while($x < 10){ 

                        //corpo do loop
                        echo $x . "<br>";

                        //incremento do contatdo
                        //$x++;
                        $x = $x + 1;

                    }
                    echo "Fim do Primeiro Loop <br><br>";


                    $y = 0;
                    while($y <= 10){
                        echo $y . "<br>";
                        $y = $y + 2;
                    }
                    echo "Fim do Segundo Loop<br><br>";

                    $z = 10;
                    while($z > 0){
                        echo $z . "<br>";
                        $z = $z - 1;
                    }
                    echo "Fim do Terceiro Loop<br><br>";

                    $a = 0;

                    while ($a <= 10) {
                                          

                        if($a % 2 !=0){
                            echo $a . "<br>";
                        }
                    $a++;

                    }
                    echo "Fim do Quarto Loop<br><br>";

                
                     
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     