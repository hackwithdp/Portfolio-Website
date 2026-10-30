<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '' ||
    mb_strlen($name) > 100 || mb_strlen($email) > 150 || mb_strlen($message) > 5000 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?status=error#contact');
    exit;
}

require __DIR__ . '/config.php';

try {
    $stmt = $pdo->prepare('INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)');
    $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
    header('Location: index.php?status=success#contact');
    exit;
} catch (PDOException $e) {
    error_log('Portfolio contact form failed: ' . $e->getMessage());
    header('Location: index.php?status=error#contact');
    exit;
}
