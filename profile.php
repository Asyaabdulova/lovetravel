<?php
    $subscrube = 456;
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
                            <li><a href="#"><span>Подписки</span><br><span><?php echo $subscrube; ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </aside>
        <!-- END -- left col -->

        <!-- START -- center col -->
        <main class="col-lg-6 col-md-6">

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
