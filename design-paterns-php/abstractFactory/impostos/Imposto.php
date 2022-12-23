<?php


interface Imposto
{
    public function calculaImposto(float $valor): float;
}