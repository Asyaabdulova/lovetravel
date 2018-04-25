<?php
    $reviews = [
        ["userName"    => "Марина",
         "userImg"     => "images/Marina.jpg",
         "userComment" => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui."],
        ["userName"    => "Олег",
         "userImg"     => "images/Oleg.jpg",
         "userComment" => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui."],
        ["userName"    => "Павел",
         "userImg"     => "images/Pavel.jpg",
         "userComment" => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui."]
    ];
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="font-weight: normal; font-size: 70px; text-align: center ">Отзывы счастливых пользователей</h1>
        </div>
        <?php foreach ($reviews as $review) : ?>
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="<?php echo $review['userImg']?>" alt="Марина" width="170" class="img-thumbnail img-circle"   >
                    <h2><?php echo $review['userName']?></h2>
                </div>
                <p><?php echo $review['userComment']?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

