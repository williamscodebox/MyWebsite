<?php

$pwdSignUp = "SaltyPenguin";

$hashedPwd = password_hash($pwdSignUp, PASSWORD_BCRYPT, ['cost' => 12]);
echo "<br>" . $hashedPwd;

$pwdLogin = "SaltyPenguin";

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "<br>Password is valid.";
} else {
    echo "<br>Password is invalid.";
}



