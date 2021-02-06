<?php

function lista(){
    $compra = ["Arroz","Feijão","Macarrão", "Oleo", "Açucar"];
    foreach($compra as $compras){
        echo $compras . "," . " ";
    }
    
}
lista();

echo "<br><br>";
echo "Solução do professor <br><br>";

$compra1 = ["Arroz","Feijão","Macarrão", "Oleo", "Açucar"];

function listaparastring($arr){
    $str = "Você levou estes itens do mercado: <br><br>";

    for($i = 0; $i < count($arr); $i++){
        if($i + 1 == count($arr)){
            $str .= "$arr[$i]. ";
        }else {
            $str .= "$arr[$i], ";
        }
        
    }
    return $str;
}

    echo listaparastring($compra1);