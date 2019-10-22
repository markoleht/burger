<?php

//22.10.2019

//defineerime funktsiooni

function isPrimeNumber($number) {
    if ($number < 2) {

        echo $number . 'antud arv ei kuulu valitud vahemiku sisse<br>';
    } else {
        $divider = 2;//define divider
        while ($number % $divider != 0) {
            //while number is not divided by divider with module 0
            $divider++;//get the next divider value
        }
        //if number and divider is equal - prime number
        if ($number == $divider) {
            echo $number . ' on algarv<br>';
            $sum = $sum + $number; //$sum + $number;
        } else {
            //otherwise
            echo $number . ' ei ole algarv<br>';
        }
    }
}
//use tehd efined function
isPrimeNumber(rand(0,1000));