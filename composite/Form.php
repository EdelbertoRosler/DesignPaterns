<?php

declare(strict_types=1);


class Form implements Renderable
{

    private array $elements;

    //percorre todos os elementos e chama render() neles, então retorna a representação completa do form.
    //do lado de fora, não é possíver ver isso e a form agirá como uma única instância de objeto
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode . '</form>';
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}