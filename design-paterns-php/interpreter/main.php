<?php

declare(strict_types=1);

require "Context.php";
require "AndExp.php";
require "OrExp.php";
require "VariableExp.php";



$context = new Context();
$a = new VariableExp('A');
$b = new VariableExp('B');
$c = new VariableExp('C');
    

//----------------------------------------------------------
// testando or
var_dump($ontext->assign($a, false));
$context->assign($b, false);
$context->assign($c, true);

// A ∨ B
$exp1 = new OrExp($a, $b);
$result1 = $exp1->interpret($context);

$assertFalse($result1, 'A ∨ B must false');

// $exp1 ∨ C
$exp2 = new OrExp($exp1, $c);
$result2 = $exp2->interpret($context);

$assertTrue($result2, '(A ∨ B) ∨ C must true');
    

//----------------------------------------------------------
// testando and
$context->assign($a, true);
$context->assign($b, true);
$context->assign($c, false);

// A ∧ B
$exp1 = new AndExp($a, $b);
$result1 = $exp1->interpret($context);

$assertTrue($result1, 'A ∧ B must true');

// $exp1 ∧ C
$exp2 = new AndExp($exp1, $c);
$result2 = $exp2->interpret($context);

$assertFalse($result2, '(A ∧ B) ∧ C must false');
    



