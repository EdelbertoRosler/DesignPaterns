<?php
require "VendaFactory.php";
require "./classes/VendaProduto.php";
require "./impostos/Icms.php";

class VendaProdutoFactory implements VendaFactory {

    private int $pesoProduto;

    public function __construct(int $pesoProduto) {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function buscarImposto(): Imposto {
        return new Icms();
    }
}
    // sempre que eu criar uma venda de produto ele vai criar
    // essa venda com a data de hoje e com o peso do produte que 
    // eu informei. E quando eu precisar do imposto ele vai pegar o icms.