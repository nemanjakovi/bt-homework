<?php
// Pravougaonik
function surfaceRectangle($a, $b)
{
    $p = $a * $b;
    return number_format($p, 2);
}

echo "Surface of the rectangle swimming pool is: " . surfaceRectangle(25, 5) . "m²<br> <br>";

// Krug
function surfaceCircle($r)
{

    $p = pow(2, $r) * M_PI;
    return number_format($p, 2);
}

echo "The surface of the round pool is: " . surfaceCircle(4) . "m²<br><br>";

//  Pravougaonik sa polukrugom
function surfaceRoundedRectangle($a, $b)
{
    // the area of ​​the rectangle
    $pRectangle = $a * $b;

    // radius of the circle
    $r = $b / 2;

    // Circle area
    $pCirklr = $r * $r *  M_PI;

    // surface of a semicircle
    $semicircle = $pCirklr / 2;

    // pool area
    $pRoundedRectangle = $pRectangle + $semicircle;
    return number_format($pRoundedRectangle, 2);
}

echo "The surface of the pool lining is: " . surfaceRoundedRectangle(6, 8) . "m²<br><br>";

// Površina datih bazen
function AllPools($a, $b, $c)
{
    $p = $a + $b + $c;
    return number_format($p, 2);
}

echo "The surface of all pools is:" . AllPools(surfaceRectangle(25, 5), surfaceCircle(4), surfaceRoundedRectangle(6, 8)) . "m²";
