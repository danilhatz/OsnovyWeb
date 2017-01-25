<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>eMeblef</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>

<body>
<?php require_once "blocks/header.php"; ?>
<div class="container">
    <?php require_once "blocks/slider.php"?>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h3 align="center" style="margin-top: 0;">Categories</h3>
        </div>
    </div>
    <div class="row text-center">
        <?php $categories = require __DIR__ . '/goods/categories.php'; ?>
        <?php foreach ($categories as $categoryId => $category): ?>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img class="items" src="<?php echo $category['img'] ?>">
                    <div class="caption">
                        <h3><?php echo $category['title'] ?></h3>
                        <p><?php echo $category['description']?></p>
                        <p>
                            <a href="/goods/items.php?category_id=<?php echo $categoryId?>" class="btn btn-primary"><?php echo $category['btnTitle']?></a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php require_once "blocks/footer.php" ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
