<?php

declare(strict_types=1);
namespace DesignPatterns\strategy;

require "Comparador.php";

class IdComparator implements Comparator
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}