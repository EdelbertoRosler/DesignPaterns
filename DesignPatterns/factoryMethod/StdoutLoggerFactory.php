<?php

declare(strict_types=1);
namespace designPatterns\factoryMethod;
require 'StdoutLogger.php';
require 'LoggerFactory.php';


class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}