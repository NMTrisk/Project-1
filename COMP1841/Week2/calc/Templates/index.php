<?php


if (!isset($_POST['val1'])) {
    
    $title = 'Basic Calculator';
    include __DIR__ . '/templates/form.html.php';
    exit;
}


$val1 = $_POST['val1'] ?? '';
$val2 = $_POST['val2'] ?? '';
$calc = $_POST['calc'] ?? 'add';


if (!(is_numeric($val1) && is_numeric($val2))) {
    $title = 'Input Error';
    $error = 'Both inputs must be numeric (e.g., 12, 3.5, -7).';
    include __DIR__ . '/templates/error.html.php';
    exit;
}

$a = (float)$val1;
$b = (float)$val2;
$result = null;
$opSymbol = '';

switch ($calc) {
    case 'add':
        $result = $a + $b;
        $opSymbol = '+';
        break;
    case 'sub':
        $result = $a - $b;
        $opSymbol = '−';
        break;
   
    case 'mul':
        $result = $a * $b;
        $opSymbol = '×';
        break;
    case 'div':
        if ($b == 0.0) {
            $title = 'Math Error';
            $error = 'Division by zero is not allowed.';
            include __DIR__ . '/templates/error.html.php';
            exit;
        }
        $result = $a / $b;
        $opSymbol = '÷';
        break;
    default:
        $title = 'Unknown Operation';
        $error = 'Unsupported calculation mode.';
        include __DIR__ . '/templates/error.html.php';
        exit;
}


$output = "{$a} {$opSymbol} {$b} = {$result}";

$title = 'Result';
include __DIR__ . '/templates/result.html.php';

