<?php

$items = require __DIR__ . "/goods/itemsData.php";
$categories = require __DIR__ . '/goods/categories.php';
$categoryId = intval($_GET["category_id"]);
$itemId = intval($_GET["item_id"]);
$itemAction = ($_GET["action"]);
$itemInfo = $items[$categoryId][$itemId];
$deleteItem = '';
$checkCookie = unserialize($_COOKIE['basket']);
if ($itemAction === "add"): {
    if ($checkCookie == false || $checkCookie == [null]): {
        $cookie = [];
        array_push($cookie, $itemInfo);
        $serCookie = serialize($cookie);
        setcookie('basket', $serCookie, time() + 86400);
    };
    else: {
        array_push($checkCookie, $itemInfo);
        $serCookie = serialize($checkCookie);
        setcookie('basket', $serCookie, time() + 86400);
    }
    endif;
};
elseif ($itemAction === "delete"): {
    if ($checkCookie == false || $checkCookie == [null]): {
        var_dump("Error: You can't delete item when they not in basket");
    };
    else: {
        $checkCookie = $deleteItem;
        $serCookie = serialize($checkCookie);
        setcookie('basket', $serCookie, time() + 86400);
    };
    endif;
}
endif;
header("Location: /basket.php");