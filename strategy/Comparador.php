<?php

declare(strict_types=1);
namespace designPatterns\strategy;

interface Comparador
{
    public function compare($a, $b): int;
}