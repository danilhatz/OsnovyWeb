<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>eMeblef: about us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>

<body>
<?php require_once "blocks/header.php";
$items = require __DIR__ . "/goods/itemsData.php";
$categories = require __DIR__ . '/goods/categories.php';
$items = unserialize($_COOKIE['basket']);
$basket = [];
array_push($basket, $items);
?>
<div class="container goods">
    <div class="columns large-8">
        <?php var_dump($basket);die; ?>
        <div class="thumbnail">
            <img class="items" src="<?php echo $items['img'] ?>">
        </div>
    </div>
    <div class="columns large-3">
        <div class="caption">
            <h3><?php echo $items['title'] ?></h3>

            <p><?php echo $items['description'] ?></p>

            <p>
                <a href="../shopingcard.php?category_id=<?php echo $categoryId ?>&item_id=<?php echo $itemId ?>&action=add"
                   class="btn btn-primary">Delete from basket</a>
            </p>
        </div>
    </div>
</div>
<?php require_once "blocks/footer.php" ?>
</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
