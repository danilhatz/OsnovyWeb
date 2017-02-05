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
    <div class="container checkout">
        <p>Checkout</p>

        <form method="GET">
            <input type="text" name="first-name"/>
            <input type="text" name="last-name"/>
            <input type="text" name="phone-number"/>
            <input type="text" name="email"/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        <?php
        if (isset($_REQUEST['submit'])) {
            $name = $_GET['first-name'];
            $last = $_GET['last-name'];
            $phone = $_GET['phone-number'];
            $email = $_GET['email'];
//            echo "Submit method: " . $name . $last . $phone . $email;
            require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
            $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                ->setUsername('emeblef')
                ->setPassword('bSAzq3553');

            $mailer = Swift_Mailer::newInstance($transport);

            $message = Swift_Message::newInstance('Test Subject')
                ->setFrom(array('emeblef@gmail.com' => 'eMeblef'))
                ->setTo(array('danilhatz@gmail.com'))
                ->setBody('Client' .$name .$last. 'whant to buy this items:'.$item['title'] .$item['description'].
                    "You can contact with him using his phone number" .$phone);
            $result = $mailer->send($message);
        }
        ?>
        </form>
    </div>

</div>

<?php require_once "blocks/footer.php" ?>
</body>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
