<?php

declare(strict_types=1);
namespace designPatterns\factoryMethod;
require 'FileLogger.php';

class FileLoggerFactory implements LoggerFactory
{

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->caminhoArquivo);
    }
}