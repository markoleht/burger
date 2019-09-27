<?php
//radius_input.php
//defineerime muutuja $raadius ja omistame kasutaja poolt sisestatud v22rtus
$raadius = $_GET['raadius'];
//v2;ljastame saadud v22rtuse ekraanil
echo 'Sisestatud raadius on ' .$raadius.'<br>';
//arvutused
//ringi pindala
$ringiPindala = 3.14 * $raadius * $raadius;
// ringi ymberm66t
$ringiUmbermoot = 3.14 * 2 * $raadius;
// muutujate andmete tyypi ja v22rtuste kontroll
//var_dump($ringiPindala);
//var_dump($ringiUmbermoot);
//v2ljastame tulemused
echo 'Ringi pindala on ' .$ringiPindala.'<br>';
echo 'Ringi ymberm66t on ' .$ringiUmbermoot.'<br>';