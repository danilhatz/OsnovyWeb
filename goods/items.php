<!DOCTYPE html>
< lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>eMeblef: about us</title>
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
        <?php $categoryId = $_GET["category_id"]?>
        <?php foreach ($items[$categoryId] as $itemId => $item): ?>
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img class="items" src="<?php echo $item['img']?>">
                <div class="caption">
                    <h3><?php echo $item['title']?></h3>

                    <p><?php echo $item['shortDescription']?></p>

                    <p>
                        <a href="../goods/item.php?category_id=<?php echo $categoryId?>&item_id=<?php echo $itemId?>" class="btn btn-primary">More Info</a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
<?php require_once "../blocks/footer.php"?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>


