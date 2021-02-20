<?php

    $arr = ["lapis"=> 10.00, "borracha"=> 0.50, "camiseta"=> 5.52];

    function itens($arr){
        $arrCaros = [];
        for($i = 0; $i< count($arr); $i++){
            foreach($arr as $item => $preco){
                if($preco > 10){
                    array_push($arrCaros, $item);
                }
            }
        }
        return $arrCaros;
    }

    $novoarr = itens($arr);

    print_r($novoarr);

?>