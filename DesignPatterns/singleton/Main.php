<?php

declare(strict_types=1);

namespace DesignPatterns\singleton;

require_once "../../html/header.php";
require_once "../../html/buttons.php";
require 'Singleton.php';


$firstCall = Singleton::getInstance();
$secondCall = Singleton::getInstance();

var_dump(Singleton::class, $firstCall);echo "<hr>";
var_dump($firstCall, $secondCall);
    
require_once "../../html/footer.php";