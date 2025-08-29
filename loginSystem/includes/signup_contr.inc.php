<?php

declare(strict_types=1);

function is_input_empty(string ...$inputs): bool {
    foreach ($inputs as $input) {
        if (empty(trim($input))) {
            return true;
        }
    }
    return false;
}

function is_email_invalid(string $email): bool {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username): bool {
    return (bool) get_username($pdo, $username);
}
function is_email_registered(object $pdo, string $email): bool {
    return (bool) get_email($pdo, $email);
}

function create_user(object $pdo, string $username, string $pwd, string $email): void {
    set_user($pdo, $username, $pwd, $email);
}