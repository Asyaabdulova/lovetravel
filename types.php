<?php
    // integer - целочисленный тип данных
    -123;
    90;
    45;

    // float - тип с плавающей точкой
    -12.56;
    78.00000003;

    // string - строковый тип
    "simple string 1";
    'simple string 2';

    $name = "Дима! ";

//    echo "Меня зовут, $name";
//    echo "Меня зовут, {$name}Это хорошо!";
//    echo 'Меня зовут, $name!';

    $str = "very long string";

//    echo $name{0};



    // boolean - тип булев

    true; false;





//    операции с числами

echo 1+1;
echo "<br>";
echo 1-5;
echo "<br>";
echo 10*5;
echo "<br>";
echo 10/3;

$a = 3;
$b = 4;

echo "<br>";
$c = $b+$a; // 7
echo $c;


$c += 4; // $c = $c + 4;

$c++; // $c += 1; // $c = $c +1;
$c--; // $c -= 1; // $c = $c -1;



///////////////////////
// Привидение типов
///////////////////////////

echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

$age = "jkhgndfkjhk";
//echo $age/2;
echo gettype($age);
settype($age,"integer");
echo "<br>";
echo gettype($age);


$a = "10";

echo "<br>";
echo $a+1;
echo "<br>";
echo gettype(+$a);