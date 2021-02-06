<?php

function soma($a, $b){
    print_r (func_get_args());
    return $a + $b;
    echo func_num_args() . "<br>";
}

soma(2, 4);