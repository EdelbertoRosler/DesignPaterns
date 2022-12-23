<?php

declare(strict_types=1);


class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}