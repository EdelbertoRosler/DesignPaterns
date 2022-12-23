<?php

declare(strict_types=1);
namespace designPatterns\command;
require 'Command.php';


/**
* Este comando concreto chama "print" no receptor, mas um comando externo
* invocador só sabe que pode chamar "execute"
*/
class OlaCommand implements Command
{
    /**
    * Cada comando concreto é construído com diferentes receptores.
    * Pode haver um, muitos ou nenhum receptor, mas pode haver outros comandos nos parâmetros
    */
    public function __construct(Receptor $saida)
    {
        $this->saida = $saida;
    }

    /**
     * execute e imprima "Hello World".
     */
    public function execute()
    {
        // as vezes não há receptor e este é o comando que faz todo o trabalho
        $this->saida->escreva('Olá Mundo');
    }
}