<?php
    // ad  -  админ
    // ga  -  автор группы
    // du  -  обычный пользователь

    $userRole = "ga";

    $profileMenu = [
        ["Моя страница"],
        ["Сообщения",12],
        ["Друзья",34],
        ["Фотографии"],
        ["Видео"]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
</head>
<body>

<?php include "tpls/nav.php"?>


<div class="container main-body">
    <div class="row">
        <!-- START -- left col -->
        <aside class="col-lg-3 col-md-3">

            <?php include "tpls/iserIDcard.php"?>

            <?php include "tpls/profileMenu.php"?>


        </aside>
        <!-- END -- left col -->

        <!-- START -- center col -->
        <main class="col-lg-6 col-md-6">

            <?php include "tpls/profilePosts.php"?>

        </main>
        <!-- END -- center col -->

        <!-- START -- right col -->
        <aside class="col-lg-3 col-md-3">

        </aside>
        <!-- END -- right col -->
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
