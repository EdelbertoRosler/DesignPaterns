<?php

declare(strict_types=1);
require_once "../../html/header.php";
require_once "../../html/buttons.php";
require "Form.php";
require "TextElement.php";
require "InputElement.php";


$form = new Form();
$form = (new TextElement('Email:'));
$form = (new InputElement());
$embed = new Form();
$embed = (new TextElement('Password:'));
$embed = (new InputElement());
$form = ($embed);

//Este é apenas um exemplo, em um cenário do mundo real, é importante lembrar que os navegadores da Web atualmente não suportam formulários aninhados
echo '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>', $form->render();

require_once "../../html/footer.php";