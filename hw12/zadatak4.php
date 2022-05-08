<?php


$dan = 0;
for ($puz = 3, $drvo = 100; $puz <= $drvo; $puz += 3, $drvo++) {
    $dan++;

    echo "<p>Dan $dan: Puz je presao " . $puz . "cm , visina drveta je " . $drvo . "cm  </p> <br>";
}

if (($drvo % $puz) != 0) {
    $puz -= $puz % $drvo;
    $dan++;
    echo "<p>Dan $dan: Puz je presao " . $puz . "cm , visina drveta je " . $drvo . "cm  </p> <br>";
}
