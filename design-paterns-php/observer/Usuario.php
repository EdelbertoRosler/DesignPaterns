<?php

declare(strict_types=1);

namespace designPatterns\observer;

use SplSubject;
use SplObjectStorage;
use SplObserver;

/**
 * User implements the observed object (called Subject), it maintains a list of observers and sends notifications to
 * them in case changes are made on the User object
 */
class Usuario implements SplSubject
{
    private SplObjectStorage $observadores;
    private $email;

    public function __construct()
    {
        $this->observadores = new SplObjectStorage();
    }


    public function attach(SplObserver $observador): void
    {
        $this->observadores->attach($observador);
    }


    public function detach(SplObserver $observador): void
    {
        $this->observadores->detach($observador);
    }


    public function changeEmail(string $email): void
    {
        $this->email = $email;
        $this->notify();
    }


    public function notify(): void
    {
        /** @var SplObserver $observer */
        foreach ($this->observadores as $observador) {
            $observador->update($this);
        }
    }
}