<?php

declare(strict_types=1);

require "AbstractExp.php";


class OrExp extends AbstractExp
{
    public function __construct(AbstractExp $first, AbstractExp $second)
    {
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}