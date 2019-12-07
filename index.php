<?
require_once 'cal.php';
$calc = new Calc;

$calc->subtract(20);
$calc->add(20);

if ($calc->getResult() != 0) {
    $calc->add(42);
}

echo($calc->getResult());
