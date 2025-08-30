<?php

declare(strict_types=1);

function get_user(PDO $pdo , string $username): array|false {
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user ? $user : false;

}