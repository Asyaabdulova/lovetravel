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

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
    <div class="container">
        <a class="navbar-brand" href="#">Lovetravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php switch ($userRole) :
                    case "ad": ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">все пользователи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">панель управления</a>
                        </li>
                    <?php break;
                          case "ga": ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">сообщество</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">настройки группы</a>
                        </li>
                    <?php break;
                          default: ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                <?php endswitch; ?>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Олешка
                        <img class="img-thumbnail profileMenuImg" src="images/Oleg.jpg">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarProfile">
                        <a class="dropdown-item" href="#">Фото профиля</a>
                        <a class="dropdown-item" href="#">Альбомы</a>
                        <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="#">Редактировать</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container main-body">
    <div class="row">
        <!-- START -- left col -->
        <aside class="col-lg-3 col-md-3">

            <div class="card identityCard">
                <div class="userBG"></div>
                <div>
                    <div class="mainProfileImg">
                        <a href="#"><img class="img-thumbnail" src="images/Oleg.jpg"></a>
                    </div>
                    <h6>Олешка Забияка</h6>
                    <div class="tagline">Самый лучший парень на селе</div>
                    <div>
                        <ul class="itemList">
                            <li><a href="#"><span>Друзья</span><br><span>12M</span></a></li>
                            <li><a href="#"><span>Подписки</span><br><span>19</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="list-group profileMenu">
                <?php foreach ($profileMenu as $item) : ?>
                    <?php if (array_key_exists(1,$item)) : ?>
                        <a href="#" class="list-group-item list-group-item-action justify-content-between d-flex align-items-center">
                            <?php echo $item[0]; ?>
                            <span class="badge badge-info"><?php echo $item[1]; ?></span>
                        </a>
                    <?php else: ?>
                        <a href="#" class="list-group-item list-group-item-action"><?php echo $item[0]; ?></a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div class="list-group profileMenu">
                <a href="#" class="list-group-item list-group-item-action">Моя страница</a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between d-flex align-items-center">
                    Сообщения
                    <span class="badge badge-info">10</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action justify-content-between d-flex align-items-center">
                    Друзья
                    <span class="badge badge-info">12</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">Фотографии</a>
                <a href="#" class="list-group-item list-group-item-action">Видео</a>
            </div>

        </aside>
        <!-- END -- left col -->

        <!-- START -- center col -->
        <main class="col-lg-6 col-md-6">

            <div class="card">
                <div class="printMsg">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="inputMsg" class="sr-only">Message</label>
                                <input class="form-control" id="inputMsg" placeholder="Введите сообщение">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="button" class="btn btn-primary">Слать</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="post">
                    <div class="autor row">
                        <div class="col-md-2" >
                            <img src="images/Oleg.jpg">
                        </div>
                        <div class="col-md-10">
                            <div>Олег Забияка</div>
                            <div>07.03.2018 г</div>
                        </div>
                    </div>
                    <div class="content">
                        <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <img style="width: 100%" src="images/slider1.jpg">
                    </div>
                </div>

            </div>

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
