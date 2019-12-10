<?php
// loome yhendus andebaasiga

function connection($host, $user, $pass, $dbname){
    $link = mysqli_connect($host, $user, $pass, $dbname);

    if($link === false) {
        //veateade probleemi korral
        echo 'Probleem andmebaasi yhendamisega! <br>';
        exit;
    }
    return $link; // tagastame edsaspidiseks kasutamisedks
}
