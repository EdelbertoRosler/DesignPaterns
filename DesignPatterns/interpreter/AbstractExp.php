<?php

declare(strict_types=1);
namespace DesignPatterns\interpreter;


abstract class AbstractExp
{
    abstract public function interpret(Context $context): bool;
}