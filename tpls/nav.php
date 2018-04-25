<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info" style="padding: 0">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo1.png" alt="love"></a>
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