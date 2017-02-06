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
        <?php foreach ($items as $item): ?>
        <div class="thumbnail">
            <img class="items" src="<?php echo $item['img']; ?>">
        </div>
        <h3><?php echo $item['title'] ?></h3>

        <p><?php echo $item['description'] ?></p>

        <p>
            <a href="shopingcard.php?category_id=<?php echo $categoryId ?>&item_id=<?php echo $itemId ?>&action=add"
               class="btn btn-primary">Delete from basket</a>
    </div>
    <div class="columns large-3">
        <div class="caption">
        </div>
    </div>
    <?php endforeach; ?>
    <?php if ($items){ ?>
    <div class="container checkout">
        <h3>Checkout</h3>

        <form method="POST" action="checkout.php">
            <label> First Name
                <input type="text" name="first-name"/>
            </label>
            <label> Last Name
                <input type="text" name="last-name"/>
            </label>
            <label> Phone number
                <input type="text" name="phone-number"/>
            </label>
            <label> Email address
                <input type="text" name="email"/>
            </label>
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </div>
    <?php } else{?>
        <h3> Basket is empty </h3>
    <?php }?>

</div>

<?php require_once "blocks/footer.php" ?>
</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
