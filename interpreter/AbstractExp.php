<?php

declare(strict_types=1);

abstract class AbstractExp
{
    abstract public function interpret(Context $context): bool;
}