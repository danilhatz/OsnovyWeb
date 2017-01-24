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
$items = unserialize($_COOKIE['basket']); ?>
<div class="container goods">
    <div class="columns large-8">
        <?php foreach ($items as $item):?>
        <div class="thumbnail">
            <img class="items" src="<?php echo$item['img']; ?>">
        </div>
        <h3><?php echo $item['title'] ?></h3>

        <p><?php echo $item['description'] ?></p>

        <p>
            <a href="../shopingcard.php?category_id=<?php echo $categoryId ?>&item_id=<?php echo $itemId ?>&action=add"
               class="btn btn-primary">Delete from basket</a>
    </div>
    <div class="columns large-3">
        <div class="caption">
        </div>
    </div>
    <?php endforeach;?>
   <div class="container checkout">
       <p>Checkout</p>
    <form>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname">
        <label for="fname">Last Name</label>
        <input type="text" id="fname" name="fname">
        <label for="fname">Your phone number</label>
        <input type="text" id="fname" name="fname">
        <label for="fname">Your email address</label>
        <input type="text" id="fname" name="fname">
        <a href="../shopingcard.php?category_id="
           class="btn btn-primary">Checkout</a>
    </form>
       </div>
</div>

<?php require_once "blocks/footer.php" ?>
</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
