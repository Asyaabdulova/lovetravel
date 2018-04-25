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
