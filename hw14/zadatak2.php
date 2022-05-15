<?php

function nekaFunkcija($potrposnjaPoKamionu, $ukupnoGorivo, $ostatakGorivaFlag = false)
{
    if ($ukupnoGorivo == 0) {
        return "Morate uneti rutu";
    } elseif ($potrposnjaPoKamionu == 0) {
        return "Morate uneti potrošnju kamiona";
    } else if ($potrposnjaPoKamionu > $ukupnoGorivo) {
        return "Da bi ste napravili jednu turu potrebno vam je još " .  $potrposnjaPoKamionu - $ukupnoGorivo . " l goriva";
    } else {

        if (($ostatakGorivaFlag)) {
            $ostatakGoriva =  $ukupnoGorivo % $potrposnjaPoKamionu;
            return "Ostatak goriva nakon završene rute je: $ostatakGoriva litara";
        } else {

            $brojKamionaKojiMoguDaPredjuRutu = $ukupnoGorivo / $potrposnjaPoKamionu;
            return "Broj kamion koji mogu da predju rutu je: " . floor($brojKamionaKojiMoguDaPredjuRutu);
        }
    }
}

echo nekaFunkcija(1, 1);
