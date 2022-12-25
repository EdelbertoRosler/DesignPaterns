<?php

declare(strict_types=1);
namespace DesignPatterns\visitor;

class User implements Role
{
    public function __construct(string $name)
    {
    }

    public function getName(): string
    {
        return sprintf('User %s', $this->name);
    }

    public function accept(RoleVisitor $visitor)
    {
        $visitor->visitUser($this);
    }
}