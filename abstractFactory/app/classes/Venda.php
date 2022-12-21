<?php

abstract class Venda {
    
    public \DateTimeInterface $data_venda;

    public function __construct(\DateTimeInterface $data_venda) {

        $this->data_venda = $data_venda;
        
    }
}