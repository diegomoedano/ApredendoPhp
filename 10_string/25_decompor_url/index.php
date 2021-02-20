<?php

    $url = "https://www.google.com";

    $arrUrl = parse_url($url);

    print_r ($arrUrl);

    echo "<br>";

    echo $arrUrl["host"];


    echo "<br><br>";

    $url2 = "https://www.google.com/buscando.php";

    $arrUrl2 = parse_url($url2);

    print_r ($arrUrl2);

    echo "<br>";

    echo $arrUrl2["host"];
    echo "<br>";
    echo $arrUrl2["path"];

?>