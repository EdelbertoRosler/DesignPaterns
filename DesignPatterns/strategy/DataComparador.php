<?php

declare(strict_types=1);
namespace DesignPatterns\strategy;
require 'Comparador.php';

use DateTime;

class DateComparator implements Comparador
{
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}