<?php
require_once 'config.php';// loeme andebaasi confi sisse
require_once 'db_fnc.php';//loeme andebaasi tootlusega seotud funktsioonid

// teeme katsed

$ikt = connection(host:HOSTNAME, user:USERNAME, pass:USERPASS, dbname:'DBNAME');
