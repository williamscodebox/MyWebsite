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

function is_password_wrong(string $pwd, string $hashedPwd) :bool {
    if (!password_verify($pwd, $hashedPwd)) {
        return true;
    } else {
        return false;
    }
}