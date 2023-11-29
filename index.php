<?php
require_once "smarty/Smarty_init.php";
require_once "DB/DB_connect.php";

$smarty = new Smarty_init(); 
$db = DB_connect::getDB();

// Gets top 3 private lessons from database
// $topViews = "SELECT * FROM views ORDER BY views_count DESC LIMIT 3";
$topPurchase = "SELECT offers.*, COUNT(payments.id) AS cnt FROM payments JOIN offers ON offers.id = payments.offersid GROUP BY payments.offersid ORDER BY cnt DESC LIMIT 3";  

$stmt = $db->prepare($topPurchase);
$stmt->execute();
$result = $stmt->fetchAll();

$offersData = [
    $result[1],
    $result[0],
    $result[2]
];
$smarty->assign('offersData', $offersData);
$smarty->debugging = true;
$smarty->debug_tpl = 'smarty/templates/debug.tpl';
$smarty->display('index.tpl');