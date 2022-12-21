<?php

declare(strict_types=1);

require "Form.php";
require "TextElement.php";
require "InputElement.php";


use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        //Este é apenas um exemplo, em um cenário do mundo real, é importante lembrar que os navegadores da Web atualmente não suportam formulários aninhados
        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}