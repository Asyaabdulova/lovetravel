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
