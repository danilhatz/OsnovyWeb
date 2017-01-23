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

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        <div class="columns large-8">
            <div class="thumbnail">
                <img class="items" src="<?php echo $itemInfo['img'] ?>">
                </div>
            </div>
        <div class="columns large-3">
                <div class="caption">
                    <h3><?php echo $itemInfo['title']?></h3>

                    <p><?php echo $itemInfo['description']?></p>

                    <p>
                        <a href="../shopingcard.php?category_id=<?php echo $categoryId?>&item_id=<?php echo $itemId?>&action=add" class="btn btn-primary">Add to basket</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Footer -->


<?php require_once "../blocks/footer.php"?>


<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>



</html>


