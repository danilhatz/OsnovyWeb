<!DOCTYPE html>
< lang="en">
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Item page</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/heroic-features.css" rel="stylesheet">

</head>

<body>
<div class="container goods">

<?php require_once "../blocks/header.php";
$items = require __DIR__ ."/itemsData.php";
$categories = require __DIR__ . '/../goods/categories.php';
?>

    <div class="container-fluid">
        <?php $categoryId = intval($_GET["category_id"]);
        $itemId = intval($_GET["item_id"]);
        $itemInfo  = $items[$categoryId][$itemId]?>
        <div class="col-md-6">
            <div class="thumbnail">
                <img class="items" src="<?php echo $itemInfo['img'] ?>">
                </div>
            </div>
        <div class="columns large-3">
                <div class="caption">
                    <h3><?php echo $itemInfo['title']?></h3>

                    <p><?php echo $itemInfo['description']?></p>

                    <p><?php echo $itemInfo['price']?></p>

                    <p>
                        <a href="../shopingcard.php?category_id=<?php echo $categoryId?>&item_id=<?php echo $itemId?>&action=add" class="btn btn-primary">Add to basket</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
<div class="item-footer">
<?php require_once "../blocks/footer.php"?>
    </div>
</body>
<!-- Footer -->

<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>



</html>


