<?php

declare(strict_types=1);

namespace designPatterns\decorator;

require 'ReservaQuartoDuplo.php';
require 'WiFi.php';
require 'CamaExtra.php';


$reserva = new ReservaQuartoDuplo();
var_dump($reserva->calculaPreco()); echo "<br>";
var_dump($reserva->pegaDescricao());
echo "<hr>";
    
$reserva = new WiFi($reserva);
var_dump($reserva->calculaPreco()); echo "<br>";
var_dump($reserva->pegaDescricao());
echo "<hr>";

$reserva = new CamaExtra($reserva);
var_dump($reserva->calculaPreco()); echo "<br>";
var_dump($reserva->pegaDescricao());
echo "<hr>";

    