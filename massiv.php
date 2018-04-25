<?php

    $user=[ "Guest"," no email" ];
$user[0]="Толик";
$user[1]="tolean@gmail.com";
$user[2]="tolik25";
?>
<p>Имя пользователя:<?php echo $user[0]?> </p>
<p>Почта пользователя:<?php echo $user[1]?> </p>
<p>Пароль пользователя:<?php echo $user[2]?> </p>
<?php

$users = [ [ "vira" , "vira@gmail.com" , "Foj25"], [ "Pavel", "pavel@gmail.com", "pas32" ], $user ];
var_dump($users);
foreach ($users as $u){
    echo "<p>Имя пользователя: $u[0] </p>";
    echo "<p>Почта пользователя: $u[1] </p>";
    echo "<p>Пароль пользователя: $u[2] </p>";
}
for ( $ui=0; $ui<count($users); $ui++){
    echo "<p>Имя пользователя: {$users[$ui][0]} </p>";
    echo "<p>Почта пользователя: {$users[$ui][1]} </p>";
    echo "<p>Пароль пользователя: {$users[$ui][2]} </p>";
}
?>
