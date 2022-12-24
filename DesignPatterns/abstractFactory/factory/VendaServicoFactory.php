<?php
require "VendaFactory.php";
require "./classes/VendaServico.php";
require "./impostos/Iss.php";

class VendaServicoFactory implements VendaFactory {

    private string $nomePrestador;

    public function __construct(string $nomePrestador) {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda {  
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function buscarImposto(): Imposto {
        return new Iss();
    }
}