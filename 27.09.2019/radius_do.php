<?php
//radius_input.php
//defineerime muutuja $raadius ja omistame kasutaja poolt sisestatud v22rtus
$raadius = $_GET['raadius'];
//v2;ljastame saadud v22rtuse ekraanil
echo 'Sisestatud raadius on ' .$raadius.'<br>';
//arvutused
//ringi pindala
$ringiPindala = pi() * $raadius * $raadius;
// ringi ymberm66t
$ringiUmbermoot = pi() * 2 * $raadius;
// muutujate andmete tyypi ja v22rtuste kontroll
//var_dump($ringiPindala);
//var_dump($ringiUmbermoot);
//v2ljastame tulemused
echo '<hr>';
$ringiPindalaUmmardatud = round($ringiPindala, 3);
echo 'Ringi pindala on ' .$ringiPindalaUmmardatud.'<br>';
echo 'Ringi ymberm66t on ' .round($ringiUmbermoot, 3).'<br>';
//cmnd+(hiirega liigud k2su peale ja voila
//php.net