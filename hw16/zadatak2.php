<?php
function mathOperations($array, $n = "+")
{
    $rezult = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($n == "+") {
            return  $rezult = $rezult + $array[$i];
            break;
        } else if ($n == "-") {
            return $rezult = $rezult - $array[$i];
            break;
        } else if ($n == "*") {
            return $rezult = $rezult * $array[$i];
            break;
        } else if ($n == "/") {
            return $rezult = $rezult / $array[$i];
            break;
        } else {
            die("Something wnet wrong");
        }
    }
}
$array = array(10, 5);
echo  mathOperations($array);
echo "<br>";
echo  mathOperations($array, "-");
echo "<br>";
echo  mathOperations($array, "*");
echo "<br>";
echo  mathOperations($array, "/");
echo "<br>";
echo  mathOperations($array, ",");
