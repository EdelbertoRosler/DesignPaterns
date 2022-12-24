<?php

declare(strict_types=1);

namespace designPatterns\decorator;


abstract class ReservaDecorator implements Reserva
{
    public function __construct(Reserva $reserva)
    {
        $this->reserva = $reserva;
    }
}