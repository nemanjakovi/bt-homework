<?php

// Zadatak broj 1

$number_1 = 200;
$number_2 = 80;

echo "$number_1 + $number_2 = " .  $number_1 + $number_2 . "<br>";
echo "$number_1 - $number_2 = " .  $number_1 - $number_2 . "<br>";
echo "$number_1 * $number_2 = " .  $number_1 * $number_2 . "<br>";
echo "$number_1 / $number_2 = " .  $number_1 / $number_2 . "<br> <br>";

// Zadatak broj 2

$randNumber = rand(0, 6);

if ($randNumber == 1) {
    echo "Danas je ponedeljak";
} elseif ($randNumber == 2) {
    echo "Danas je utorak";
} elseif ($randNumber == 3) {
    echo "Danas je sreda";
} elseif ($randNumber == 4) {
    echo "Danas je cetvrtak";
} elseif ($randNumber == 5) {
    echo "Danas je petak";
} elseif ($randNumber == 6) {
    echo "Danas je subota";
} else {
    echo "Danas je nedelja";
}
echo "<br> <br>";

// Zadatak broj 3

$a = 3;
$b = 5;
$c = 7;
echo "Zbir brojeva $a, $b i $c je " . $a + $b + $c;
echo "<br> <br> <br>";






$array = [200, 80];
echo  "Zbir brijeva 200 i 80 je " . array_sum($array);
echo "<br>";

$randNumber = rand(0, 6);

switch ($randNumber) {
    case 1:
        echo "Danas je ponedeljak";
        break;
    case 2:
        echo "Danas je utorak";
        break;
    case 3:
        echo "Danas je sreda";
        break;
    case 4:
        echo "Danas je cetvrtak";
        break;
    case 5:
        echo "Danas je petak";
        break;
    case 6:
        echo "Danas je subota";
    default:
        echo "Danas je nedelja";
        break;
}
echo "<br>";




$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "Zbir brojeva $a, $b i $c je " . $a + $b + $c;
