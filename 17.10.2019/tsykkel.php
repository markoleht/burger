<?php
//ruut

for($row = 1; $row <= 5; $row++){
    echo $row.'&nbsp;';
    if($row < 10){
        echo '&nbsp;&nbsp;';
    }
    for($col = 1; $col <= 5; $col++){
        echo '*';
        echo '&nbsp';
    }
        '*';
    echo '<br>';
}

//kolmnurk
echo '<br>';


for($row = 1; $row <= 5; $row++) {
    echo $row . '&nbsp;';
    if ($row < 10) {
        echo '&nbsp;&nbsp;';
    }
    for ($col = 1; $col <= $row; $col++) {
        echo '*';
        echo '&nbsp';
    }
    '*';
    echo '<br>';
}

//tagurpidi kolmnurk

echo '<br>';


for($row = 1; $row <= 5; $row++) {
    echo $row . '&nbsp;';
    if ($row < 10) {
        echo '&nbsp;&nbsp;';
    }
    for ($col = 0; $col < 6-$row; $col++) {
        echo '*';
        echo '&nbsp';
    }
    '*';
    echo '<br>';
}

// voi teine variant

echo '<br>';

for($row = 1; $row <= 6; $row++) {
    echo $row . '&nbsp;';
    if ($row < 10) {
        echo '&nbsp;&nbsp;';
    }
    for ($col = 1; $col <= (6-$row); $col++) {
        echo '*';
        echo '&nbsp';
    }

    echo '<br>';
}

//suurenev kolmnurk

for($row = 1; $row < 6; $row++) {
    echo $row . '&nbsp;';
    if ($row < 10) {
        echo '&nbsp;&nbsp;';
    }
    // spaces
    for ($col = 1; $col <= (5-$row);$col++){
        echo '&nbsp;&nbsp;&nbsp;';
    }
    //asterix
    for($col = 1; $col <=$row; $col++){
        echo '*';
        echo '&nbsp';
    }

    echo '<br>';
}


//pyramiiid

for($row = 1; $row < 6; $row++) {
    echo $row . '&nbsp;';
    if ($row < 10) {
        echo '&nbsp;&nbsp;';

    }
    // spaces
    for ($col = 1; $col <= (5-$row);$col++){
        echo '&nbsp;&nbsp;&nbsp;';
    }
    //asterix
    for($col = 1; $col <=2*$row-1; $col++){
        echo '*';
        echo '&nbsp';
    }


    echo '<br>';
}




