<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Our contacts</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>

<body>
<?php require_once "blocks/header.php" ?>

<div class="container">
    <div class="col-md-4 contacts-info">
        <p>Our store:
        <p>You can find our store in Budynok Mebliv near metro station Dryzbi Narodov
        <p>Our phone number: +380639517721
        <p>Our address: Druzhby Narodiv Blvd, 23\n
        </p>
    </div>

    <div class="col-md-8 map">
    <div id="map"></div>
    <script>
        function initMap() {
            var kiev = {lat: 50.417975, lng: 30.542892};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: kiev
            });
            var marker = new google.maps.Marker({
                position: kiev,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDov4skf_9z2qRDn8v4UxICg0sLS1BQ4ho&callback=initMap">
    </script>
    </div>
</div>
<?php require_once "blocks/footer.php"?>
</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
