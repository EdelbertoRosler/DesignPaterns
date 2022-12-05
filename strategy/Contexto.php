<?php

declare(strict_types=1);

namespace designPatterns\strategy;

class Contexto
{
    public function __construct(private Comparador $comparador)
    {
    }

    public function executeStrategy(array $elementos): array
    {
        uasort($elementos, [$this->comparador, 'compare']);

        return $elementos;
    }
}