<?php
// COMP1841 - Week 2 - Calculator (Part 1–3)

if (!isset($_POST['val1'])) {
    // (== dòng 3 yêu cầu include form)
    $title = 'Basic Calculator';
    include __DIR__ . '/templates/form.html.php';
    exit;
}

// Lấy dữ liệu POST
$val1 = $_POST['val1'] ?? '';
$val2 = $_POST['val2'] ?? '';
$calc = $_POST['calc'] ?? 'add';

// Part 3: kiểm tra hợp lệ
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
    // Part 2: nhân & chia
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

// Tạo chuỗi output (Part 1)
$output = "{$a} {$opSymbol} {$b} = {$result}";

// (== dòng 16 yêu cầu include result)
$title = 'Result';
include __DIR__ . '/templates/result.html.php';
