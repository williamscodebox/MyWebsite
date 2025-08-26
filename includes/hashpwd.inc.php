<?php

$sensitiveData = "SaltyPenguin";
$salt = bin2hex(random_bytes(16)); // Generate a random salt
$pepper = "SuperSecretPepper"; // This should be stored securely, not in the code

echo "<br>" . $salt; // Store this salt alongside the hashed data

$dataToHash = $sensitiveData . $salt . $pepper;
$hashedData = hash('sha256', $dataToHash);

echo "<br>" . $hashedData;

/*------------*/


$storedSalt = $salt; // Retrieve the stored salt
$storedHash = $hashedData; // Retrieve the stored hash
$storedPepper = $pepper; // Retrieve the stored pepper

$dataToVerifyHash = $sensitiveData . $storedSalt . $storedPepper;
$verificationHash = hash('sha256', $dataToVerifyHash);

if ($verificationHash === $storedHash) {
    echo "<br>Data is valid.";
} else {
    echo "<br>Data is invalid.";
}

/*------------*/

$storedSalt = $salt; // Retrieve the stored salt
$storedHash = $hashedData; // Retrieve the stored hash
$storedPepper = $pepper; // Retrieve the stored pepper
$sensitiveData2 = "WrongData"; // Simulate incorrect data input

$dataToVerifyHash = $sensitiveData2 . $storedSalt . $storedPepper;
$verificationHash = hash('sha256', $dataToVerifyHash);

if ($verificationHash === $storedHash) {
    echo "<br>Data is valid.";
} else {
    echo "<br>Data is invalid.";
}