<?php

//22.10.2019

//defineerime funktsiooni

function isPrimeNumber($number) {
    if ($number < 2) {
        $result =  $number . 'antud arv ei kuulu valitud vahemiku sisse<br>';
    } else {
        $divider = 2;//define divider
        while ($number % $divider != 0) {
            //while number is not divided by divider with module 0
            $divider++;//get the next divider value
        }
        //if number and divider is equal - prime number
        if ($number == $divider) {
            $result = $number . ' on algarv<br>';
        } else {
            //otherwise
            $result = $number . ' ei ole algarv<br>';
        }
    }
    return $result;
}
//define function, which use the boolean result of isPrimeNumber and
//show the text - is prime or is not prime with the number value
//use tehd efined function

