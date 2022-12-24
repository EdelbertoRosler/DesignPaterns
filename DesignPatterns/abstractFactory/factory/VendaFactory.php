<?php

interface VendaFactory {

    public function criarVenda(): Venda;
    public function buscarImposto(): Imposto;
}