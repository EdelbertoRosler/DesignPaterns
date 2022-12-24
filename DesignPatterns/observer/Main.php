<?php

declare(strict_types=1);
namespace DesignPatterns\observer;

require_once "../../html/header.php";
require_once "../../html/buttons.php";
require 'Usuario.php';
require 'UsuarioObserver.php';

$observer = new UserObserver();

$user = new Usuario();
$user->attach($observer);

var_dump($user);
echo "<hr>";

$user->changeEmail('foo@bar.com');

var_dump(1, $observer->getChangedUsers());

require_once "../../html/buttons.php";