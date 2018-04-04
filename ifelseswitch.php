<?php

$userAge = 12;

if($userAge < 18) {
    echo "Вам меньше 18!";
}elseif ($userAge >= 18 && $userAge <= 35) {
    echo "Вам можно ;)";
}elseif ($userAge > 35) {
    echo "Вам уже все надо!!!!";
}