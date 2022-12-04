<?php

declare(strict_types=1);
namespace designPatterns\command;


class Invocador
{
    private Command $command;


    public function setCommand(Command $cmd)
    {
        $this->command = $cmd;
    }


    public function run()
    {
        $this->command->execute();
    }
}