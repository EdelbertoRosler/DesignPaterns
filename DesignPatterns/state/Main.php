<?php

declare(strict_types=1);
namespace DesignPatterns\state;
use DesignPatterns\state\OrderContext;

require_once "../../html/header.php";
require_once "../../html/buttons.php";
require 'OrderContext.php';



$orderContext = OrderContext::create();
$created = $orderContext->toString();
var_dump($created);
echo "<br>";


$contextOrder = OrderContext::create();
$contextOrder->proceedToNext();
$shipped = $contextOrder->toString();
var_dump($shipped);
echo "<br>";

$contextOrder = OrderContext::create();
$contextOrder->proceedToNext();
$contextOrder->proceedToNext();
$done = $contextOrder->toString();
var_dump($done);
echo "<br>";


$contextOrder = OrderContext::create();
$contextOrder->proceedToNext();
$contextOrder->proceedToNext();
$contextOrder->proceedToNext();
$done = $contextOrder->toString();
var_dump($done);


require_once "../../html/footer.php";