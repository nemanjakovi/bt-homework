<?php
if (isset($_POST["submit"])) {

    $aZida = $_POST["visina_zida"];
    $bZida = $_POST["sirina_zida"];

    $aPlocice = $_POST["visina_plocice"];
    $bPlocice =  $_POST["sirina_plocice"];

    if (empty($aZida) || empty($bZida) || empty($aPlocice) || empty($bPlocice)) {
        !die("Unesite potrebne parametre!!!");
    } else if (
        !preg_match("/^[0-9]+$/", $aZida) || !preg_match("/^[0-9]+$/", $bZida) ||
        !preg_match("/^[0-9]+$/", $aPlocice) || !preg_match("/^[0-9]+$/", $bPlocice)
    ) {
        die("Pogrešan unos!!!");
    } else {
        $povZida = $aZida * $bZida;
        $povPlocica = $aPlocice * $bPlocice;

        $ukupnoPlocica = $povZida / $povPlocica;
        echo "Potreban broj pločica da bi se popločao ceo zid - " . ceil($ukupnoPlocica);
    }
}
