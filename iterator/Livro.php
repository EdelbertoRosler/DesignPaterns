<?php

declare(strict_types=1);
namespace designPatterns\iterator;

class Livro
{

    public function __construct(private string $titulo, private string $autor)
    {
    }

    public function buscaAutor(): string
    {
        return $this->autor;
    }

    public function buscaTitulo(): string
    {
        return $this->titulo;
    }

    public function buscaAutorEbuscaTitulo(): string
    {
        return $this->buscaTitulo() . ' de ' . $this->buscaAutor();
    }
}