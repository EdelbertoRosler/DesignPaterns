<?php

declare(strict_types=1);
namespace DesignPatterns\iterator;

require_once "../../html/header.php";
require_once "../../html/buttons.php";
require 'Livro.php';
require 'ListaLivros.php';

//--------------------------------------------------------------
$bookList = new ListaLivros();
$bookList->addBook(new Livro('Learning PHP Design Patterns', 'William Sanders'));
$bookList->addBook(new Livro('Professional Php Design Patterns', 'Aaron Saray'));
$bookList->addBook(new Livro('Clean Code', 'Robert C. Martin'));

$books = [];


foreach ($bookList as $book) {
    $books[] = $book->buscaAutorEbuscaTitulo();   
}

foreach ($books as $book) {
    var_dump($book);
    echo "<br>";
}
echo "<hr>";


//--------------------------------------------------------------
$book = new Livro('Clean Code', 'Robert C. Martin');
$book2 = new Livro('Professional Php Design Patterns', 'Aaron Saray');

$bookList = new ListaLivros();
$bookList->addBook($book);
$bookList->addBook($book2);
$bookList->removeBook($book);

$books = [];
foreach ($bookList as $book) {
    $books[] = $book->buscaAutorEbuscaTitulo();
}

foreach ($books as $book) {
    var_dump($book);
    echo "<br>";
}
echo "<hr>";
    

//---------------------------------------------------------------
$livro = new Livro('Clean Code', 'Robert C. Martin');

$listaLivros = new ListaLivros();
$listaLivros->addBook($livro);

var_dump($listaLivros);
echo "<hr>";


//---------------------------------------------------------------
$book = new Livro('Clean Code', 'Robert C. Martin');

$bookList = new ListaLivros();
$bookList->addBook($book);
$bookList->removeBook($book);

var_dump($bookList);
echo "<hr>";
   
require_once "../../html/footer.php";