<?php

declare(strict_types=1);
namespace designPatterns\strategy;

class IdComparador implements Comparador
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}