<?php

declare(strict_types=1);
namespace designPatterns\command;


class Receptor
{
    private bool $ativeData = false;
    private array $saida = [];

    public function escreva(string $str)
    {
        if ($this->ativeData) {
            $str .= ' [' . date('Y-m-d') . ']';
        }

        $this->saida[] = $str;
    }

    public function pegaSaida(): string
    {
        return join("\n", $this->saida);
    }

    // Ative o receptor para exibir a data da mensagem
    public function ativeData()
    {
        $this->ativeData = true;
    }

    // Desative o receptor para exibir a data da mensagem
    public function desativeData()
    {
        $this->ativeData = false;
    }
}