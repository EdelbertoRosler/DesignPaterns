<?php

declare(strict_types=1);
namespace DesignPatterns\state;

require "State.php";
require "StateShipped.php";

class StateCreated implements State
{
    public function proceedToNext(OrderContext $context)
    {
        $context->setState(new StateShipped());
    }

    public function toString(): string
    {
        return 'created';
    }
}