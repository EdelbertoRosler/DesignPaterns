<?php

declare(strict_types=1);

namespace designPatterns\observer;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    /**
     * @var SplSubject[]
     */
    private array $usuariosAlterados = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     */
    public function update(SplSubject $subject): void
    {
        $this->usuariosAlterados[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->usuariosAlterados;
    }
}