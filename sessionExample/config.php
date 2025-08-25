<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'path' => '/',
    'domain' => 'localhost',
    'secure' => true,
    'httponly' => true,
]);

session_start();

session_regenerate_id(true);
