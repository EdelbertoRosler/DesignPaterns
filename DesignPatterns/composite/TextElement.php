<?php

declare(strict_types=1);


class TextElement implements Renderable
{
    public function __construct(string $text)
    {
    }

    public function render(): string
    {
        return $this->text;
    }
}