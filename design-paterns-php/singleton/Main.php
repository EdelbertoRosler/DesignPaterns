<?php

declare(strict_types=1);

namespace designPatterns\singleton;
require 'Singleton.php';


$firstCall = Singleton::getInstance();
$secondCall = Singleton::getInstance();

var_dump(Singleton::class, $firstCall);echo "<hr>";
var_dump($firstCall, $secondCall);
    
