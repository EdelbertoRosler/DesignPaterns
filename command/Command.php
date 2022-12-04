<?php

declare(strict_types=1);
namespace designPatterns\command;


interface Command
{
    /**
    * este é o método mais importante no padrão Command,
    * O Receptor vai no construtor.
    */
    public function execute();
}