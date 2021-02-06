<?php
function velocidadeMAxima($vel){
    if(is_integer($vel)){
        echo "O Carro atinge a velocidade m´maxima $vel km/h.  <br>";
    }else {
        echo "Digite um número inteiro. <br>";
    }
}
velocidadeMAxima(200);
velocidadeMAxima(150);
velocidadeMAxima("teste");
?>

<?php

function descreverAnimal($nome, $raca){
    echo "O Animal $nome é da raça $raca <br>";
}
descreverAnimal("Cão", " Pastor Alemão");
?>



