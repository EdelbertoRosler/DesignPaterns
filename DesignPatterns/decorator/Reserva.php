<?php

declare(strict_types=1);

namespace designPatterns\decorator;

interface Reserva
{
    public function calculaPreco(): int;

    public function pegaDescricao(): string;
}