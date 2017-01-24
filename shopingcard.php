<?php

$items = require __DIR__ . "/goods/itemsData.php";
$categories = require __DIR__ . '/goods/categories.php';
$categoryId = intval($_GET["category_id"]);
$itemId = intval($_GET["item_id"]);
$itemInfo = $items[$categoryId][$itemId];
$checkCookie = unserialize($_COOKIE['basket']);
    if ($checkCookie == false || $checkCookie == [null]):{
        $cookie = [];
        array_push($cookie, $itemInfo);
        $serCookie = serialize($cookie);
        setcookie('basket', $serCookie, time()+86400);
    };
    else:
    {
        array_push($checkCookie, $itemInfo);
        $serCookie = serialize($checkCookie);
        setcookie('basket', $serCookie, time()+86400);
    }
    endif;
header("Location: /basket.php");