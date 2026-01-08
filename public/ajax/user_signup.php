<?php
header('Content-Type: application/json; charset=utf-8');
session_start();

require_once __DIR__ . '/../../app/config/config.php';
require_once APP_ROOT . '/core/Autoload.php';

try {
    $pdo = Database::pdo();

    $username = trim($_POST['uname'] ?? '');
    $gender   = trim($_POST['gend'] ?? '');
    $city     = trim($_POST['cityname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = (string)($_POST['pass'] ?? '');

    if ($username === '' || $email === '' || $password === '') {
        echo json_encode(['ok' => false, 'message' => 'Required fields missing']);
        exit;
    }

    // Check existing by username or email (no data changes)
    $st = $pdo->prepare("SELECT 1 FROM user WHERE Username = ? OR Email = ? LIMIT 1");
    $st->execute([$username, $email]);
    if ($st->fetch()) {
        echo json_encode(['ok' => false, 'message' => 'Username or Email already exists']);
        exit;
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $st = $pdo->prepare("INSERT INTO user (Username, Gender, City, Email, Password) VALUES (?, ?, ?, ?, ?)");
    $ok = $st->execute([$username, $gender, $city, $email, $hash]);

    if ($ok) {
        echo json_encode(['ok' => true, 'redirect' => 'userlogin.php']);
        exit;
    }

    echo json_encode(['ok' => false, 'message' => 'Signup failed']);
} catch (Throwable $e) {
    echo json_encode(['ok' => false, 'message' => 'Server error']);
}
