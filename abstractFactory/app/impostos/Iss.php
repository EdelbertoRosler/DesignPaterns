<?php

require "Imposto.php";

class Iss implements Imposto{

    public function calculaImposto(float $valor): float{
        return $valor * 0.06;
    }

} 