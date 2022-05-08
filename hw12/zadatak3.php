<?php

$n = 10;
$x = 1;
$sum = 0;
if ($n == 10) {
    while ($x <= $n) {
        $sum += $x;
        $x++;
    }
    echo "Sum is: $sum";
} else if ($n == 100) {
    while ($x <= $n) {
        $sum += $x;
        $x++;
    }
    echo "Sum is: $sum";
} else if ($n == 1000) {
    while ($x <= $n) {
        $sum += $x;
        $x++;
    }
    echo "Sum is: $sum";
} else {
    echo 'Vrednost za $n mora biti 10, 100 , 1000';
}
