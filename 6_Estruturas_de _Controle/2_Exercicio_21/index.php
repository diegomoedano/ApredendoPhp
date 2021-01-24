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
                <h2> Exercício 21 <h2>
                <div class="code">
                    <?php                               
                      $n1 = 5;
                      $n2 = 2;
                      $nome1 = "Matheus";
                      $nome2 = "Pedro";
                      $n3 = 12;
                      $n4 = 11;

                      echo "5 > 2 ? <br>";
                      if($n1 > $n2){
                          echo "Verdadeiro <br><br>";
                      }else {
                          echo "Falso <br><br>";
                      }

                      echo "$nome1 != $nome2? <br>";
                      if ($nome1 != $nome2){
                          echo "Verdadeiro <br><br>";
                      }else{
                          echo "Falso<br><br>";
                      }

                      echo "12 <= 11 ? <br>";
                      if($n3 <= 11){
                          echo "Verdadeiro<br><br>";
                      }else {
                          echo "Falso <br><br>";
                      }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

     