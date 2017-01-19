<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eMeblef</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php require_once "blocks/header.php" ?>
<!-- Page Content -->
<div class="container">
    <header class="jumbotron hero-spacer">
        <!--<div class="logo">-->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="/img/index/logo.jpg" style="width:100%">

                <div class="text">
                    <h1 align="center">eMeblef</h1>

                    <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; eMeblef is a wholesale brand, focused
                        on
                        creating special statement pieces
                        for designers and boutiques. Our pieces are designed<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by
                        us and distinguished by the use of unusual materials,
                        proportion and thoughtful design.<br>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbspWe love what we do and hope you enjoy exploring our
                        collection in more detail.
                    </p>
                    <a type="button" class="btn btn-about" href="about.php">About us</a>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="/img/index/bed2.jpg" style="width:100%">

                <div class="text">
                    <h1 align="center">eMeblef</h1>

                    <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; eMeblef is a wholesale brand, focused
                        on
                        creating special statement pieces
                        for designers and boutiques. Our pieces are designed<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by
                        us and distinguished by the use of unusual materials,
                        proportion and thoughtful design.<br>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbspWe love what we do and hope you enjoy exploring our
                        collection in more detail.
                    </p>
                    <a type="button" class="btn btn-about" href="about.php">About us</a>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="/img/index/sofa_3.jpg" style="width:100%">

                <div class="text">
                    <h1 align="center">eMeblef</h1>

                    <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; eMeblef is a wholesale brand, focused
                        on
                        creating special statement pieces
                        for designers and boutiques. Our pieces are designed<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;by
                        us and distinguished by the use of unusual materials,
                        proportion and thoughtful design.<br>
                        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbspWe love what we do and hope you enjoy exploring our
                        collection in more detail.
                    </p>
                    <a type="button" class="btn btn-about" href="about.php">About us</a>
                </div>
            </div>
        </div>

        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </header>

    <hr>
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>BESTSELLERS</h3>
        </div>
    </div>
    <!-- /.row -->
    <!-- Page Features -->
    <div class="row text-center">
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img class="items" src="img/index/sofa.jpg">

                <div class="caption">
                    <h3>Sofas</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More
                            Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img class="items" src="img/index/bed1.jpg">

                <div class="caption">
                    <h3>Beds</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More
                            Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img class="items" src="img/index/dining.jpg">

                <div class="caption">
                    <h3>Dining Sets </h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More
                            Info</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img class="items" src="img/index/computer_table.jpg">

                <div class="caption">
                    <h3>Tables</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More
                            Info</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="line">
</div>

<!-- /.row -->



<!-- Footer -->
<?php require_once "blocks/footer.php"?>

<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/slider.js"></script>
</body>

</html>
