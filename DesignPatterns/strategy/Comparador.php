<?php

declare(strict_types=1);
namespace DesignPatterns\strategy;

interface Comparador
{
    public function compare($a, $b): int;
}