<?php

declare(strict_types=1);

namespace designPatterns\strategy;
require 'Contexto.php';
require 'DataComparador.php';
require 'IdComparador.php';


//-------------------------------------------------------------------
$integers = [
    [
        [['id' => 2], ['id' => 1], ['id' => 3]],
        ['id' => 1],
    ],
    [
        [['id' => 3], ['id' => 2], ['id' => 1]],
        ['id' => 1],
    ],
];
    
$dates = [
    [
        [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
        ['date' => '2013-03-01'],
    ],
    [
        [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
        ['date' => '2013-02-01'],
    ],
];



$obj = new Contexto(new IdComparador());
$elements = $obj->executeStrategy($integers);    

$firstElement = array_shift($elements);
var_dump($integers, $firstElement);
    

//-------------------------------------------------------------------


$obj = new Contexto(new DateComparator());
$elements = $obj->executeStrategy($dates);

$firstElement = array_shift($elements);
var_dump($dates, $firstElement);
