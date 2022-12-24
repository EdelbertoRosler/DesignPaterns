<?php

declare(strict_types=1);
namespace designPatterns\factoryMethod;
require 'Logger.php';


class StdoutLogger implements Logger
{
    private String $mensagem;
    
    public function log(string $mensagem)
    {
        echo $mensagem;
    }
}