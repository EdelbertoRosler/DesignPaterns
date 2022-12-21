<?php
require "Venda.php";

class VendaProduto extends Venda {
    
    private int $peso_produto;
    
    public function __construct(\DateTimeInterface $data_venda, int $peso_produto) {
        
        parent::__construct($data_venda);
        
        $this->pesoProduto = $peso_produto;
    }
}

// Bom já tenho uma Classe Venda de Serviços, e um Classe venda de Produtos
// Agora, pra fazer mais sentido esse design, eu vou adicionar nas vendas, os impostos
// Porque cada venda vai ter seu imposto, e, nesse caso, para os serviços, 
// o imposto é o Iss, e, para o Produto, é o Icms.

// Ou seja, vamos relacionar as vendas com os impostos. Sempre que realizar uma 
// venda de serviço, ele retornará o imposto correto, e da mesma forma com a venda de produto.

