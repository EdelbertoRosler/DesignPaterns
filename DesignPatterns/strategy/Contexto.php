<?php

declare(strict_types=1);

namespace DesignPatterns\strategy;

class Contexto
{
    public function __construct(Comparador $comparador)
    {
    }

    public function executeStrategy(array $elementos): array
    {
        uasort($elementos, [$this->comparador, 'compare']);

        return $elementos;
    }
}