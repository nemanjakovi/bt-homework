<?php


if (empty($_GET["day"])) {
    echo "Enter a date <br>";
    exit();
}
if (empty($_GET["month"])) {
    echo "Enter a moth";
    exit();
}
if (empty($_GET["year"])) {
    echo "Enter a year";
    exit();
}

$day = $_GET["day"];
$month = $_GET["month"];
$year = $_GET["year"];

if (!preg_match("/^[0-9]+$/", $day) || !preg_match("/^[0-9]+$/", $month) || !preg_match("/^[0-9]+$/", $year)) {
    echo "Only numbers are alowed";
    exit();
}

$month31 = ["01", 1, "03", 3, "05", 5, "07", 7, "08", 8, 10, 12];
$month30 = ["04", 4, "06", 6, "09", 9, 11];


if (strlen($day) > 2 || strlen($month) > 2 || strlen($year) !== 4) {
    echo "Invalid date format";
    exit();
}
if ($year < 1900 || $year > 2025) {
    echo "The date must be in between 1900 - 2025";
    exit;
}

if ($month > 12) {
    echo "Invalid date";
    exit();
}
if (in_array($month, $month31) && $day > 31) {
    echo "This ($month) have 31 days";
    exit();
}
if (in_array($month, $month30) && $day > 30) {
    echo "This ($month) have 30 days";
    exit();
}
if (($year % 4) == 0 && ($month == 02 || $month == 2) && $day > 29) {
    echo "This month ($month) have 29 days in lap year";
    exit();
}
if (($year % 4) !== 0 && ($month == 02 || $month == 2) && $day > 28) {
    echo "This month ($month) have 28 days";
    exit();
}
echo $day . "/" . $month . "/" . $year . ".";
