<?php
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
//$items = unserialize($_COOKIE['basket']);
//foreach ($items as $item):
//$item['title'];
//    $item['description'];
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
    ->setUsername('emeblef')
    ->setPassword('bSAzq3553');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
    ->setFrom(array('emeblef@gmail.com' => 'ABC'))
    ->setTo(array('danilhatz@gmail.com'))
    ->setBody('Peters request to buy sofa and chair');

$result = $mailer->send($message);
//endforeach;


