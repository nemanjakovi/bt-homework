<?php

$users = [
    [
        "name" => "Pera",
        "last_name" => "Miric",
        "img" => "..."
    ],
    [
        "name" => "Mitar",
        "last_name" => "Miric",
        "img" => "..."
    ],
    [
        "name" => "Mita",
        "last_name" => "Bekrija",
        "img" => "..."
    ],
    [
        "name" => "Zoran",
        "last_name" => "Zoranic",
        "img" => "..."
    ]
];

function search_users($users, $searchContent = "")
{
    foreach ($users as $user) {

        foreach ($user as  $u) {
            if (str_contains($u, $searchContent)) {;
                print_r($user);
                break;
            }
        }
    }
}

search_users($users, "ic");
echo "<br>";

search_users($users, "an");
echo "<br>";
search_users($users, "ja");
