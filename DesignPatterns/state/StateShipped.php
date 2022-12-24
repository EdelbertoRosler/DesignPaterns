<?php

declare(strict_types=1);
namespace DesignPatterns\state;

require "StateDone.php";

class StateShipped implements State
{
    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateDone());
    }

    public function toString(): string
    {
        return 'shipped';
    }
}