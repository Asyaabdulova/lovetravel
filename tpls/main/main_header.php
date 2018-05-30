<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">LoveTravel</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Возможности</a>
                </li>
                <?php if($auth) { ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Мой профиль</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7 text-white">
                <h1 class="text-uppercase">
                    <strong>КАЖДОЕ МГНОВЕНИЕ ЖИЗНИ ЭТО ВОЗМОЖНОСТЬ</strong>
                </h1>
            </div>

            <?php if (!$auth) : // ($auth == false) ?>
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <form>

                                <div class="form-group">
                                    <label for="registerLogin" class="d-none">Email address</label>
                                    <input type="text" class="form-control" id="registerLogin" placeholder="Login">
                                </div>
                                <div class="form-group">
                                    <label for="registerEmail" class="d-none">Email address</label>
                                    <input type="email" class="form-control" id="registerEmail" placeholder="Email">
                                </div>
                                <div class="form-group " style="margin-bottom: 0">
                                    <label for="registerPass" class="d-none">Password</label>
                                    <input type="password" class="form-control" id="registerPass" placeholder="Password">
                                </div>
                                <div class="small" style="margin-bottom: 1rem">Регистрируясь Вы соглашаетесь с политикой <a href="#">конфиденциальности</a>
                                </div>
                                <button type="button" class="btn btn-primary">Register</button>
                                or
                                <a href="/auth.php" class="btn btn-primary">Log In</a>

                            </form>

                            <button style="margin-top: 10px" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#socialModal">Войти через соцсети
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>


<!-- Modal -->
<div class="modal fade" id="socialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вход через социальные сети</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="#"><img src="images/facebook-icon.png" width="70" class="img-thumbnail"></a>
                <a href="#"><img src="images/twiter.jpg" width="70" class="img-thumbnail"></a>
                <a href="#"><img src="images/odnoklassniki.png" width="70" class="img-thumbnail"></a>
                <a href="#"><img src="images/Instagram_icon.png" width="70" class="img-thumbnail"></a>
                <a href="#"><img src="images/vk_bg.png" width="70" class="img-thumbnail"></a>
                <a href="#"><img src="images/orig.png" width="70" class="img-thumbnail"></a>
            </div>
        </div>
    </div>
</div>