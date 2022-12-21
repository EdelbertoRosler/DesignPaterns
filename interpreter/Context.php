<?php

declare(strict_types=1);

class Context
{
    private array $variavelPool;

    public function olharAcima(string $name): bool
    {
        if (!key_exists($name, $this->variavelPool)) {
            throw new Exception("não existe variável: $name");
        }

        return $this->variavelPool[$name];
    }

    public function atribuicao(VariableExp $variable, bool $val)
    {
        $this->variavelPool[$variable->getName()] = $val;
    }
}