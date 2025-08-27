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