<?php

require "Venda.php";

// A venda de serciço é um tipo de venda por isso preciso extender Venda
class VendaServico extends Venda {

    // além da data da venda o serviço vou informar o nome do prestador
    private string $nome_prestador;

    public function __construct(\DateTimeInterface $data_venda, string $nome_prestador) {
        //inicializa o construtor da classe base
        parent::__construct($data_venda);
        // e inicia o nome do prestador
        $this->nome_prestador = $nome_prestador;

    }
    
}