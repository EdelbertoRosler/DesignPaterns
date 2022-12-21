<?php

require "Imposto.php";

class Icms implements Imposto{

    public function calculaImposto(float $valor): float{
        return $valor * 0.1;
    }

}