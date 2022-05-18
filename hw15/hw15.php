<?php

$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];

if (!in_array("Nemanja", $hwArray)) {
    array_push($hwArray, "Nemanja");
    echo "Moje ime je " . $hwArray[10] . "<br>";
}

if (!in_array("Bojan", $hwArray)) {
    array_splice($hwArray, 2, 0, "Bojan");
    echo "Ime mog rodjka je  " . $hwArray["2"] . "<br>";
}

echo "Ukupan broj Elemenata u nizu je " . count($hwArray) . "<br>";

if (!in_array("Tamara", $hwArray)) {
    array_unshift($hwArray, "Tamara");
    echo "Novi Član je  " . $hwArray["0"] . "<br>";
}

if (in_array("Danilo", $hwArray)) {
    unset($hwArray[6]);
    echo "Danilo je obrisan iz niza  <br>";
}

if (array_unique($hwArray)) {
    $hwArray = array_unique($hwArray);
    echo "Novi niz bez duplih imena je: <br>";
    foreach ($hwArray as $hwArrayNew) {
        echo $hwArrayNew . "<br>";
    }
}



$data = array(
    [
        "name" => "Pera",
        "last_name" => "Peric",
        "age" => 28,
        "gender" => "male",
        "avg_rating" => "7.5",
        "married" => false,
        "courses" => ["laravel, react, jQuery"]
    ],
    [
        "name" => "Mika",
        "last_name" => "Mikic",
        "age" => 42,
        "gender" => "male",
        "avg_rating" => "8.3",
        "married" => true,
        "courses" => ["WordPress, HTML, CSS"]
    ],
    [
        "name" => "Marija",
        "last_name" => "Maric",
        "age" => 26,
        "gender" => "fmale",
        "avg_rating" => "7.9",
        "married" => false,
        "courses" => ["Python, jQuery"]
    ],
    [
        "name" => "Ana",
        "last_name" => "Anic",
        "age" => 30,
        "gender" => "fmale",
        "avg_rating" => "9.1",
        "married" => true,
        "courses" => ["JavaScript, CSS, HTML"]
    ],
    [
        "name" => "Miloš",
        "last_name" => "Mikic",
        "age" => 29,
        "gender" => "male",
        "avg_rating" => "6.9",
        "married" => true,
        "courses" => ["react,JavaScript, jQuery"]
    ],
);
foreach ($data as $studentInfo) {
    if (($studentInfo["gender"] == "fmale") && ($studentInfo["married"] == false)) {
        $studentInfo["married"] = "nije udata";
    } else if (($studentInfo["gender"] == "fmale") && ($studentInfo["married"] == true)) {
        $studentInfo["married"] = "udata je";
    } else if (($studentInfo["gender"] == "male") && ($studentInfo["married"] == false)) {
        $studentInfo["married"] = "nije ozenjen";
    } else {
        $studentInfo["married"] = "ozenjen je";
    }
    echo $studentInfo["name"] . " " . $studentInfo["last_name"] . " ima " . $studentInfo["age"] . " godina i " . $studentInfo["married"];
    echo ". Ima prosecnu ocenu " . $studentInfo["avg_rating"] . ", a kursevi koje trenutno slusa su: " . implode(", ", $studentInfo["courses"]) . ". <br>";
}
