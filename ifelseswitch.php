<?php

$userAge = 18;
$army = 50;

if($userAge > 18) {
    echo "Вам меньше 18!";
}elseif ($userAge >= 18 && $userAge <= 35) {
    echo "Вам можно ;)";
}elseif ($userAge > 35) {
    echo "Вам уже все надо!!!!";
}
echo "<br>";

if ($army < 20) {
    echo "Ничего не получится, потому что не хватит снарядов";
} elseif ($army >=20 && $army <=50 ){
    echo " Сражайтесь у вас всё для этого есть";
}elseif ($army > 50){
    echo "Вы ПОБЕДИТЕЛЬ!!";
}
?>
<?php
$userp=[ "Guests", "no emaile"];
$userp[0]="Tolik";
$userp[1]="Smolik";
$userp[2]="Trolik-Smolik";
?>

    <p>Imea polzovatelya:<?php echo $userp[0]?></p>
    <p>Klikucha polzovatelya:<?php echo $userp[1]?></p>
    <p>Parol polzovatelya:<?php echo $userp[2]?></p>

<?php
$userssmuzers=[ [ "smira", "smara@com", "Dronherov"], ["Dron", "Smon@com","Smonherov"], $userp ];
var_dump($userssmuzers);
foreach ($userssmuzers as $use){
    echo"<p>Imea polzovatelya:$use[0]</p>" ;
    echo "<p>Klikucha polzovatelya:$use[1]</p>";
    echo "<p>Parol polzovatelya:$use[2]</p>";
}

for($uio=0;$uio<count($userssmuzers); $uio++){
    echo "<p>Imea polzovatelya: {$userssmuzers[$uio][0]} </p>";
    echo "<p>Klikucha polzovatelya: {$userssmuzers[$uio][1]} </p>";
    echo "<p>Parol polzovatelya: {$userssmuzers[$uio][2]} </p>";
}
?>