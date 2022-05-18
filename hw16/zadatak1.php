<?php
function isEmail($array)
{
    foreach ($array as $value) {
        if (str_contains($value, "@")) {
            echo  $value . "<br>";
        }
    }
}
$array = array('some@mai.coml', 'notmail', 'thisis@mail.com', 'thisisnotmail.com');
return isEmail($array) . "<br>";
