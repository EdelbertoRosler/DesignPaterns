<?php

declare(strict_types=1);

require "AbstractExp.php";


class VariableExp extends AbstractExp
{
    public function __construct(string $name)
    {
    }

    public function interpret(Context $context): bool
    {
        return $context->lookUp($this->name);
    }

    public function getName(): string
    {
        return $this->name;
    }
}