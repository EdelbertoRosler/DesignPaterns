<?php

declare(strict_types=1);

namespace designPatterns\decorator;

require 'Reserva.php';


class ReservaQuartoDuplo implements Reserva
{
    public function calculaPreco(): int
    {
        return 40;
        
    }

    public function pegaDescricao(): string
    {
        return 'quarto duplo';
    }
}