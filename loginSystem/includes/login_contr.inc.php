<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd) :bool {
    if (empty(trim($username)) || empty(trim($pwd))) {
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(bool|array $user) :bool {
    if (!$user) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $pwd, string|null $hashedPwd) :bool {
    // error_log(print_r("hash_is" . $hashedPwd, true));
    if ($hashedPwd === null) {
        return true;
    }
    $isValid = password_verify($pwd, $hashedPwd);
    // error_log("password_verify result: " . ($isValid ? 'true' : 'false'));

    return !$isValid; // Return true if password is wrong
}