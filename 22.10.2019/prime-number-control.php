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
            $result = true. ' on algarv<br>';
        } else {
            //otherwise
            $result = false . ' ei ole algarv<br>';
        }
    }
    return $result;
}
//define function, which use the boolean result of isPrimeNumber and
//show the text - is prime or is not prime with the number value
//use the defined function

function isPrimeNumberDescription($number, $isPrime) {
    //if($isPrime == true) is the same
    if($isPrime){
        echo $number.'on algarv<br>';
    } else {
        echo $number.'ei ole algarv<br>';
    }
}
//use the function
$number = rand(1,10);
isPrimeNumberDescription($number, isPrimeNumber($number));

