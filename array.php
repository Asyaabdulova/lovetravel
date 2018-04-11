<?php

$user = [];

$user[] = "Олег";
$user[] = "oleg@gmail.com";
$user[] = "1234567";

echo $user[0];
echo "<br>";
echo $user[1];
echo "<br>";
echo $user[2];
echo "<br>";

var_dump($user);
echo "<br>";
echo "<br>";

foreach ($user as $index => $val) {
    echo "элемент массива под индексом ($index) со значением: $val <br>";
}
echo "<br>";
echo "<br>";

for ($s=0; $s<10; $s++) {
    echo "номер шага $s<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($u=0; $u<count($user); $u++) {
    echo "Элемент масива user = $user[$u]<br>";
}

echo "<br>";
echo "<br>";

$users = [
    ["Vika","vika@sss.ua","ggfttrr"],
    ["Grigoriy","sdf@asw.com", "123qwe34"]
];

$users[] = $user;

var_dump($users);












