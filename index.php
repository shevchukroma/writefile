<?php
    $names = file_get_contents('countries.json');
    $countries = json_decode($names, true);
    $fp = fopen("countries.txt", "w");

    foreach ($countries as $country) {
        foreach ($country as $key => $value) {
            fwrite($fp, ' 
            ' . $key . ': ' . $value);
        }
        fwrite($fp, '
        ');
    }

    fclose($fp);

