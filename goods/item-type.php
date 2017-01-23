<?php
$categories = require __DIR__ . '/../goods/categories.php';
?>

<div class="row text-center">
    <?php foreach ($categories as $categoryId => $category): ?>
    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img class="items" src="<?php echo $category['img']?>">

            <div class="caption">
                <h3><?php echo $category['title']?></h3>
                <p>
                    <a href="/goods/items.php?category_id=<?php echo $categoryId?>" class="btn btn-primary"><?php echo $category['btnTitle']?></a>
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>