<?php

declare(strict_types=1);

function is_input_empty(...$inputs): bool {
    foreach ($inputs as $input) {
        if (empty(trim($input))) {
            return true;
        }
    }
    return false;
}

function is_email_invalid($email): bool {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}