<?php
header('Content-Type: application/json; charset=utf-8');
session_start();

require_once __DIR__ . '/../../app/config/config.php';
require_once APP_ROOT . '/core/Autoload.php';

try {
    $pdo = Database::pdo();

    $username = $_POST['unamev'] ?? $_POST['username'] ?? '';
    $password = $_POST['passv'] ?? $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        echo json_encode(['ok' => false, 'message' => 'Username and password required']);
        exit;
    }

    $st = $pdo->prepare("SELECT * FROM user WHERE Username = ? LIMIT 1");
    $st->execute([$username]);
    $row = $st->fetch();

    if (!$row) {
        echo json_encode(['ok' => false, 'message' => 'Invalid login details']);
        exit;
    }

    $stored = $row['Password'] ?? '';
    $ok = false;

    // Support both hashed and legacy plaintext without changing data
    if (is_string($stored) && (str_starts_with($stored, '$2y$') || str_starts_with($stored, '$2b$') || str_starts_with($stored, '$argon2'))) {
        $ok = password_verify($password, $stored);
    } else {
        $ok = hash_equals((string)$stored, (string)$password);
    }

    if ($ok) {
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['login_user'] = $row['Username'];
        echo json_encode(['ok' => true, 'redirect' => 'viewcity.php']);
        exit;
    }

    echo json_encode(['ok' => false, 'message' => 'Invalid login details']);
} catch (Throwable $e) {
    echo json_encode(['ok' => false, 'message' => 'Server error']);
}
