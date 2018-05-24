<?php
$dasa=[["Names"=>"Наташа",
    "Imgs"=> "images/orig.png",
    "Commets"=>" Наташе понравилось ездить по миру, отдыхать и заниматься хернёй, как говорится, всё, что угодно, абы не работать"]];

?>




            <?php foreach ($dasa as $rew): ?>
                <div class="col-lg-4">
                    <div class="text-center">
                        <img src="<?php echo $rew["Imgs"]?>" alt="<?php echo $rew["Names"]?>" width="170" class="img-thumbnail img-circle"   >
                        <h2><?php echo $rew["Names"]?></h2>
                    </div>
                    <p><?php echo $rew["Commets"]?></p>

                </div>
            <?php endforeach; ?>

