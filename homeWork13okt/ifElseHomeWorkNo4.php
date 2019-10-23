<?php
//jagamine

$jagatav = $_GET['jagatav'];
$jagaja = $_GET['jagaja'];
$jagamine = $jagatav / $jagaja;


//if(!empty($_GET[‘name’])){lause}?
echo '<br';

//NB komntroll
if(strlen($jagatav) > 0){

}
if(!$jagatav || !$jagaja) {
    echo 'Palun sisesta number';
} else {
    echo  'Jagamise vastus on '.$jagamine;
}


//Suurem/vaiksem/ifElseIf

$nr1 = $_GET['nr1'];
$nr2 = $_GET['nr2'];

//if(!empty($_GET[‘name’])){lause}

if ($nr1 > $nr2){
    echo 'Esimene number on suurem';
}else if ($nr1 < $nr2){
    echo 'Teine number on suurem';
}else {
    echo 'Need numbrid on võrdsed';
}

//Juubel - väljastab, kas tegemist on juubeliaastaga

$year = $_GET['year'];
$juubel = $year / 5;

//if(!empty($_GET[‘year’])){Sisesta Sünniaasta} ???

if (is_integer($juubel)){
    echo 'Sul on juubeliaasta - aeg toostiks!!!';
}else {
    echo 'Pole küll juubeliaasta aga toosti võid tõsta sellegipoolest';
}
//arvamine
$arv = $_GET['arv'];
$superarv = 19;

switch ($arv){
    case ($arv < $superarv): echo 'Arv on liiga väike';
        break;
    case ($arv > $superarv): echo 'Arv on liiga suur';
        break;
    default: echo 'Õige, arvasid ära!';
}


//soldat

$vanus = $_GET['vanus'];
$rahvus = $_GET['vanus'];
$haridus = $_GET['vanus'];


if (($vanus) > 18 && $rahvus = "Eestlane" && $haridus > 9) {
    echo 'Oled Soldat';

    } else {
        echo  'Sina pole mingi Soldat';
    }




