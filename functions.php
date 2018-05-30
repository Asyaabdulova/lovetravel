<?php

// описание ф-ции
function sayHello() {
    echo "Hello, Everyone!";
}

// вызов ф-ции
sayHello();
echo "<br>";

// описание ф-ции
function sayHelloByName($name) {
    echo "Hello, {$name}!";
}

// вызов ф-ции
sayHelloByName("John");
sayHelloByName("Tanya");
$name = "Vova";
sayHelloByName($name);
sayHelloByName("Igor");
echo $name;
echo "<br>";



// описание ф-ции
function sayHelloByName2($age,$name = "Guest") {
    echo "Hello, {$name}!";
}

// вызов ф-ции
sayHelloByName2(24,"John");
sayHelloByName2(45);



////////////  возврат зачения из функции

function plus($a,$b) {
    return $a+$b;
}

function minus($a,$b) {
    $c = $a-$b;
    echo "<br>before return<br>";
    return $c;
    echo "<br>after return<br>";
}

$result = plus(5,7);

echo "<br>";
echo "<br>";
echo "<br>";
echo $result;
echo "<br>";
echo plus(3,2);
echo "<br>";
echo minus(3,2);




echo "<br>";
echo "<br>";
echo "<br>";
////////////////   ОБЛАСТЬ ВИДИМОСТИ ПЕРЕМЕННЫХ

$userName = "John";
function callUser() {
    global $userName;
    echo "Call, {$userName}!";
}
callUser();

function callUser2() {
    echo "Call, {$GLOBALS["userName"]}!";
}
callUser2();

