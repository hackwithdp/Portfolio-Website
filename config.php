<?php
// Local XAMPP defaults. Update these values if your MySQL credentials differ.
$host = 'localhost';
$dbname = 'dhruv_portfolio';
$username = 'root';
$password = '';

try {
    $pdo = new PDO(
        "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    );
} catch (PDOException $e) {
    error_log('Portfolio database connection failed: ' . $e->getMessage());
    http_response_code(500);
    exit('Database connection failed. Check config.php and make sure MySQL is running.');
}