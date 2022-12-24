<?php

declare(strict_types=1);
namespace DesignPatterns\state;

interface State
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}