<?php

$user = [
    "name"     => "Vasa",
    "email"    => "Vasa@i.ua",
    "pass"     => "Vasa88090000",
    "birthday" => "12.12.2001",
];

echo "Имя пользователя: " . $user["name"] . "<br>";
echo "Дата рождения: {$user["birthday"]}<br>";

foreach ($user as $key => $value) {
    echo $key . " = " . $value . "<br>";
}