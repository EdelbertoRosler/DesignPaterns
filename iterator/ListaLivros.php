<?php

declare(strict_types=1);
namespace designPatterns\iterator;

use Countable;
use Iterator;

class ListaLivros implements Countable, Iterator
{

    private array $livros = [];
    private int $currentIndex = 0;

    public function addBook(Livro $livro)
    {
        $this->livros[] = $livro;
    }

    public function removeBook(Livro $bookToRemove)
    {
        foreach ($this->livros as $key => $livro) {
            if ($livro->buscaAutorEbuscaTitulo() === $bookToRemove->buscaAutorEbuscaTitulo()) {
                unset($this->livros[$key]);
            }
        }

        $this->livros = array_values($this->livros);
    }

    public function count(): int
    {
        return count($this->livros);
    }

    public function current(): Livro
    {
        return $this->livros[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->livros[$this->currentIndex]);
    }
}