<?php
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';

if (!isset($_POST['submit'])) {
    header('Location: http://127.0.0.1:8080/basket.php');
    exit;
}
$items = unserialize($_COOKIE['basket']);
$name = $_POST['first-name'];
$last = $_POST['last-name'];
$phone = $_POST['phone-number'];
$email = $_POST['email'];
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
    ->setUsername('emeblef')
    ->setPassword('bSAzq3553');
$body = 'Client' . $name . $last . 'want to buy this items:'. "\n";
foreach ($items as $item){
    $body.=$item['title']. "\n";
}
$body.="You can contact with him using his phone number" . $phone;

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
    ->setFrom(array('emeblef@gmail.com' => 'eMeblef'))
    ->setTo(array('danilhatz@gmail.com'))
    ->setBody($body);
$result = $mailer->send($message);

header('Location: http://127.0.0.1:8080/thankyoupage.php');
exit;