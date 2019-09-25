<?php
// muutuja tuleb defineerida
//fikseeritakse nimi ja omistatakse v22rtus
//muutuja nimi algab dollari m2rgiga
// $muutujaNimi = v22rtus;

// V22rtused - andmed - andmetyybid
// Teks - string - "info mis pannakse jutum2rkide v6i ylakomade vahele"
//T2isarvud - integer - 2, 7, 9, -15 jne
//reaalarvud e komaga arvud - double/flow - float - 3.5 , 7.9 , (koma asemel punkt)

$eesNimi = 'Marko';
$pereNimi = 'Leht';
$email = 'marko.leht@khk.ee';
$vanus = 35; //t2isarv
$pikkus = 1.85; //meetrid, reaalarv
$kaal = 78; //kilogrammid, t2isarv

echo 'Eesnimi: '.$eesNimi. '<br>';
echo 'Perenimi: '.$pereNimi. '<br>';
echo 'Email: <a href="mailto:'.$email.'">'.$email.'</a><br>';
echo 'Vanud: '.$vanus. '<br>';
echo 'Pikkus: '.$pikkus. '<br>';
echo 'Kaal: '.$kaal. '<br>';

// dynaamiline muutujate defineerimine
$kehamassiIndeks = $kaal / ($pikkus * $pikkus);
echo 'Kehamassiindeks on ' .$kehamassiIndeks.'<br>';