<?php

function findKey($array, $keysearch)
{
    $keyExists = false;
    foreach ($array as $key => $value) {
        if ($key == $keysearch) {
            $keyExists = true;
        }
    }
    if ($keyExists == true) {
        echo "The result was found ";
    } else {
        echo "The result not found.";
    }
}
$array = array('name' => 'Nemanja', "last name" => "Marković");
echo findKey($array, "last name") . " <br>";
echo findKey($array, "name") . " <br>";
echo findKey($array, "ages");
