<?php

    $ch = curl_init();
    $timeout = 0;

    curl_setopt($ch, CURLOPT_URL, 'http://192.168.0.50');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $conteudo = curl_exec($ch);

    curl_close($ch);

    $array1 = explode('<span id="temperature">', $conteudo);
    $array2 = explode('</span>', $array1[1]);

    print_r($array2);

    echo "Temperatura " . $array2[0] . " ºC<br>";
    echo "Humidade " . $array2[2] . " %<br>";
    echo "Umidade do solo " . $array2[4] . " %<br>";