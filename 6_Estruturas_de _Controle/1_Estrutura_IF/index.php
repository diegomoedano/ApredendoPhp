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
                <h2> Estrutura IF <h2>
                <div class="code">
                    <?php                               
                   //condição verdadeira
                   if (5 > 2) {
                       echo "Entrou no if 5 > 2 <br>";
                   }
                  //condição verdadeira
                  
                  if (5 <= 2) {
                    echo "Não entro no if<br>";
                }

                //operador logico

                if(10===10 && 9 > 3){
                    echo "Operação verdadeira 10 === 10 && 9 >3... <br>";
                }

                //variaveis
                $a = 10;
                $b = 5;
                $c = "If com variaveis";

                if ($a > $b) {
                    echo $c;
                }
                                     


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     