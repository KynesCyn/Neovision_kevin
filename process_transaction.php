<?php
require 'vendor/autoload.php';

\Midtrans\Config::$serverKey = 'SB-Mid-server-L8ufkzW1O6ENBt4nlpxB57qC';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

// File to save the logs
$logFile = 'debug_log.txt';

// Debugging - Check if POST data is set and log it
if (!isset($_POST['mall_name'], $_POST['showtime'], $_POST['ticket_count'], $_POST['total_price'], $_POST['username'])) {
    $logMessage = "ERROR: Missing required fields\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
    echo json_encode(['error' => 'Missing required fields']);
    exit;
}

$mallName = $_POST['mall_name'];
$showtime = $_POST['showtime'];
$ticketCount = $_POST['ticket_count'];
$totalPrice = $_POST['total_price'];
$username = $_POST['username'];

// Debugging - Write the received data to the log file
$logMessage = "Received data: mall_name={$mallName}, showtime={$showtime}, ticket_count={$ticketCount}, total_price={$totalPrice}, username={$username}\n";
file_put_contents($logFile, $logMessage, FILE_APPEND);

$orderId = "TIX" . time();

// Debugging - Write generated Order ID to the log file
$logMessage = "Generated Order ID: {$orderId}\n";
file_put_contents($logFile, $logMessage, FILE_APPEND);

$transaction = [
    'transaction_details' => [
        'order_id' => $orderId,
        'gross_amount' => $totalPrice,
    ],
    'customer_details' => [
        'first_name' => "Customer",
        'email' => $username,
    ]
];

// Debugging - Write transaction data to the log file
$logMessage = "Transaction data: " . json_encode($transaction) . "\n";
file_put_contents($logFile, $logMessage, FILE_APPEND);

try {
    $snapToken = \Midtrans\Snap::getSnapToken($transaction);
    
    // Debugging - Write the snap token to the log file
    $logMessage = "Generated Snap Token: {$snapToken}\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
    
    echo json_encode(['snap_token' => $snapToken, 'order_id' => $orderId]);
} catch (Exception $e) {
    // Debugging - Write the error message to the log file
    $logMessage = "Error generating Snap Token: " . $e->getMessage() . "\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
    
    echo json_encode(['error' => 'Failed to generate Snap Token', 'message' => $e->getMessage()]);
}
?>
