<?php
declare(strict_types=1);
namespace designPatterns\command;

require_once "../../html/header.php";
require_once "../../html/buttons.php";
require 'Receptor.php';
require 'Invocador.php';
require 'OlaCommand.php';


$invoker = new Invocador();
$receiver = new Receptor();

var_dump($invoker);echo "<hr>";
var_dump($receiver);echo "<hr>";

$invoker->setCommand(new OlaCommand($receiver));
var_dump($invoker);echo "<hr>";

$invoker->run();
var_dump('Olá Mundo', $receiver->pegaSaida());
