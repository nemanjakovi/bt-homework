<?php

function nekaFunkcija($potrposnjaPoKamionu, $ukupnoGorivo, $ostatakGorivaFlag = true)
{
    if (($ostatakGorivaFlag)) {
        $brojKamionaKojiMoguDaPredjuRutu = $ukupnoGorivo / $potrposnjaPoKamionu;
        return "Broj kamion koji mogu da predju rutu je: " . floor($brojKamionaKojiMoguDaPredjuRutu);
    } else if ($potrposnjaPoKamionu > $ukupnoGorivo) {
        return "Da bi ste napravili jednu turu potrebno vam je još " .  $potrposnjaPoKamionu - $ukupnoGorivo . " l goriva";
    } {
        $ostatakGoriva =  $ukupnoGorivo % $potrposnjaPoKamionu;
        return "Ostatak goriva nakon završene rute je: $ostatakGoriva litara";
    }
}

echo nekaFunkcija(25, 25);
