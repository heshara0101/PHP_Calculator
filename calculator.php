<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['expression'])) {
    $expression = trim($_POST['expression']);

    // Allow only numbers, math operators (+, -, *, /), decimals, and whitespace
    if (preg_match('/^[0-9+\-*\/.\s]+$/', $expression)) {
        try {
            $result = @eval("return ($expression);");

            if ($result === false && $expression !== '0') {
                echo json_encode(['status' => 'error', 'message' => 'Invalid Expression']);
            } elseif (is_infinite($result) || is_nan($result)) {
                echo json_encode(['status' => 'error', 'message' => 'Cannot divide by zero']);
            } else {
                echo json_encode(['status' => 'success', 'result' => $result]);
            }
        } catch (Throwable $e) {
            echo json_encode(['status' => 'error', 'message' => 'Calculation Error']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}