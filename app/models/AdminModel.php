<?php
class AdminModel {
    public function findByName(string $name): ?array {
        $pdo = Database::pdo();
        $st = $pdo->prepare("SELECT * FROM admin WHERE Name = ? LIMIT 1");
        $st->execute([$name]);
        $row = $st->fetch();
        return $row ?: null;
    }

    public function create(array $data): bool {
        $pdo = Database::pdo();
        $hash = password_hash($data['Password'], PASSWORD_DEFAULT);
        $st = $pdo->prepare("INSERT INTO admin (Name, Email, Password) VALUES (?, ?, ?)");
        return $st->execute([$data['Name'], $data['Email'], $hash]);
    }
}
