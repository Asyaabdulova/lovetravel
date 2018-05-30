<?php
    $email = "asd@qqq.ua";
    $password = "123456qwerty";

    function emailValid($email) {
        // поиск @ в имейле, возвращает кол-во найденных @
        $res = substr_count($email,"@");
        // проверка на кол-во найденных @
        if($res == 1) {
            return true; // если одна соака в имейле
        }else {
            return false; // если отличное от 1 собаки значение
        }
    }

    function passwordValid($password) {
        $res = strlen($password);
        if($res >= 6) {
            return true;
        }else {
            return false;
        }
    }

    function authValidation($email,$password) {
        $res = [];
        $res["email"] = emailValid($email);
        $res["password"] = passwordValid($password);
        return $res["email"] && $res["password"];
    }
?>



<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Страничка авторизации</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/lt.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">

</head>

<body>

<div class="container">

    <form class="form-signin" style="max-width: 400px; margin:auto">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>