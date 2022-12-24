<?php

declare(strict_types=1);
namespace designPatterns\factoryMethod;


class FileLogger implements Logger
{
    // private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
    }

    public function log($mensagem)
    {
        file_put_contents($this->caminhoArquivo, $mensagem . PHP_EOL, FILE_APPEND);
    }
}

