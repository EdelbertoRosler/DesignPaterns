<?php

declare(strict_types=1);
namespace designPatterns\factoryMethod;


interface Logger
{
    public function log(string $message);
}