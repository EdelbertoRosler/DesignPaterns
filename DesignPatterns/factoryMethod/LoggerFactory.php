<?php

declare(strict_types=1);
namespace designPatterns\factoryMethod;


interface LoggerFactory
{
    public function createLogger(): Logger;
}