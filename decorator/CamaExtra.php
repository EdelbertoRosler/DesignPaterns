<?php

declare(strict_types=1);

namespace designPatterns\decorator;


class CamaExtra extends ReservaDecorator
{
    private const PRICE = 30;

    public function calculaPreco(): int
    {
        return $this->reserva->calculaPreco() + self::PRICE;
    }


    public function pegaDescricao(): string
    {
        return $this->reserva->pegaDescricao() . ' com cama extra';
    }
}