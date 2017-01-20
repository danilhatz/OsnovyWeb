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

<!-- Page Content -->

<!--    <div class="row text-center">-->
    <div class="container-fluid">
        <?php foreach ($items[$_GET["category_id"]] as $item): ?>
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
<!--                --><?php //var_dump($item[$_GET['category_id']]['img']); die ?>
                <img class="items" src="<?php echo $item['img']?>">
                <div class="caption">
                    <h3><?php echo $item['title']?></h3>

                    <p><?php echo $item['shortDescription']?></p>

                    <p>
                        <a href="items.php" class="btn btn-primary">More Info</a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
<!-- Footer -->


<?php require_once "../blocks/footer.php"?>


<!-- jQuery -->
<script src="../js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>



</html>


