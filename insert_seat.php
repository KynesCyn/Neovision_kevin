<?php
require 'koneksi.php'; // Database connection

error_reporting(E_ALL);
ini_set('display_errors', 1);


// Get seat numbers from POST, ensure they are properly split into an array
$seat_numbers = isset($_POST['seat_number']) ? explode(",", $_POST['seat_number']) : [];
$mall_name = $_POST['mall_name'] ?? null;
$film_name = $_POST['film_name'] ?? null;

// Validate input data
if (empty($seat_numbers) || !$mall_name || !$film_name) {
    echo json_encode(['error' => 'Data tidak lengkap']);
    exit;
}

// Initialize success flag
$success = true;

// Loop through seat numbers to check availability and insert if valid
foreach ($seat_numbers as $seat_number) {
    // Check if the seat is already occupied
    $stmtCheck = $conn->prepare("SELECT id FROM seats WHERE seat_number = ? AND mall_name = ? AND film_name = ?");
    $stmtCheck->bind_param("sss", $seat_number, $mall_name, $film_name);

    if (!$stmtCheck->execute()) {
        echo json_encode(["error" => "Error executing check query"]);
        exit;
    }

    $resultCheck = $stmtCheck->get_result();

    // If the seat is already occupied, mark as failure
    if ($resultCheck->num_rows > 0) {
        $success = false;
        break;
    }

    // Insert the seat if not occupied
    $stmtInsert = $conn->prepare("INSERT INTO seats (seat_number, mall_name, film_name, status) VALUES (?, ?, ?, 'occupied')");
    $stmtInsert->bind_param("sss", $seat_number, $mall_name, $film_name);

    if (!$stmtInsert->execute()) {
        $success = false;
        break;
    }
}

// Return success or error message
if ($success) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(['error' => 'Gagal memasukkan data kursi']);
}
?>
