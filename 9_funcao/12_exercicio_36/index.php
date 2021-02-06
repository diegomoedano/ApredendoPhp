<?php

    function arr(){
        $x = [1,8,6,3,2,19,7,1,12,65,98,74];
        $y=[];
        for($i=0;$i < count($x); $i++ ){
            if ($x[$i] > 7) {
                array_push($y, $x[$i]);
            }
        }
        return $y;
    }
    $a = arr();
    print_r ($a)

?>