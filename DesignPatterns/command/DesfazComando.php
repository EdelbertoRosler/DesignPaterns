<?php

declare(strict_types=1);
namespace designPatterns\command;


interface DesfazComando extends Command
{
    public function undo();
}