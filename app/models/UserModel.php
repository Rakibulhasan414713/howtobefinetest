<?php
class UserModel {
    public function findByUsername(string $username): ?array {
        $pdo = Database::pdo();
        $st = $pdo->prepare("SELECT * FROM user WHERE Username = ? LIMIT 1");
        $st->execute([$username]);
        $row = $st->fetch();
        return $row ?: null;
    }

    public function create(array $data): bool {
        $pdo = Database::pdo();
        $hash = password_hash($data['Password'], PASSWORD_DEFAULT);
        $st = $pdo->prepare("INSERT INTO user (Username, Gender, City, Email, Password) VALUES (?, ?, ?, ?, ?)");
        return $st->execute([$data['Username'], $data['Gender'], $data['City'], $data['Email'], $hash]);
    }
}
