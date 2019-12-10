<?php
// loome yhendus andebaasiga

function connection($host, $user, $pass, $dbname){
    $link = mysqli_connect($host, $user, $pass, $dbname);

    if($link === false) {
        //veateade probleemi korral
        echo 'Probleem andmebaasi yhendamisega! <br>';
        exit;
    }
    //m22rame utf8
    mysqli_set_charset($link, 'utf8');
    return $link; // tagastame edsaspidiseks kasutamisedks
}
//suvalise p2ribgu saatmine andebaasi

function query($sql, $link){
    $result = mysqli_query($link, $sql);
    id($result === false){
        echo 'Probleem p2ringuga <br>' .$sql.'</br><br>';
    }
    //kui $result === true
    return $result;
}
