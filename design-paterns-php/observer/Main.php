<?php

declare(strict_types=1);
namespace designPatterns\observer;
require 'Usuario.php';
require 'UsuarioObserver.php';

$observer = new UserObserver();

$user = new Usuario();
$user->attach($observer);

var_dump($user);
echo "<hr>";

$user->changeEmail('foo@bar.com');

var_dump(1, $observer->getChangedUsers());
