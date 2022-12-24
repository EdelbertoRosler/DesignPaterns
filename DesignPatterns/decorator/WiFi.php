<?php

declare(strict_types=1);

namespace designPatterns\decorator;

require 'ReservaDecorator.php';


class WiFi extends ReservaDecorator
{
    private const PRICE = 2;

    public function calculaPreco(): int
    {
        return $this->reserva->calculaPreco() + self::PRICE;
    }

    public function pegaDescricao(): string
    {
        return $this->reserva->pegaDescricao() . ' com wifi';
    }
}