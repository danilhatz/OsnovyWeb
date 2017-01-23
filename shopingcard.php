<?php

//$cok = [1 => 3, 2 => 5];
//$t = serialize($cok);
//setcookie('er', $t, time() + 86400);
//$t = unserialize($_COOKIE['er']);
//var_dump($t);

//unset($_COOKIE["basket"]);
$items = require __DIR__ . "/goods/itemsData.php";
$categories = require __DIR__ . '/goods/categories.php';
$categoryId = intval($_GET["category_id"]);
$itemId = intval($_GET["item_id"]);
$itemInfo = $items[$categoryId][$itemId];
//$cookie[] = unserialize($_COOKIE[]);
if ($cookie === [null]): {
//    if ($_GET["action"] === "add"): {
        array_push($cookie, $itemInfo);

//        var_dump($cookie);
        setcookie('basket', serialize($cookie), time() + 86400);}
//    endif;

//    };
//        endif;}
//    elseif ($_GET["action"] === "remove"): {
//
//    }
    elseif($cookie != [null]): {
//        var_dump($cookie);
        $t = unserialize($cookie);
        var_dump($t);
        $cok = unserialize($cookie);
        var_dump($cok);
            array_push($cok, $itemInfo);
    var_dump($cok);
            setcookie('basket', serialize($cookie), time() + 86400);
    };
        endif;
echo $_COOKIE['basket'];
//header("Location: /basket.php");