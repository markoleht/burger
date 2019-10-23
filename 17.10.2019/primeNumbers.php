<?php
$sum = 0;
for($number =1; $number <=20; $number++) {
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

echo '<br>';
echo 'antud vahemikus olevate algarvude summa on' .$sum;
