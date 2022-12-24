<?php
declare(strict_types=1);
namespace designPatterns\factoryMethod;

require_once "../../html/header.php";
require_once "../../html/buttons.php";
require 'StdoutLoggerFactory.php';
require 'FileLoggerFactory.php';


$loggerFactory = new StdoutLoggerFactory();
$logger = $loggerFactory->createLogger();

var_dump(StdoutLogger::class, $logger);
echo '<hr>';


$loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
$logger = $loggerFactory->createLogger();

var_dump(FileLogger::class, $logger);

require_once "../../html/footer.php";