<?php

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['favouritepet'])) {
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input data
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $lastname = htmlspecialchars(trim($_POST['lastname']));
        $favouritepet = htmlspecialchars(trim($_POST['favouritepet']));

        // Process the data (e.g., save to database, send email, etc.)
        // For demonstration, we'll just echo the values
        echo "First Name: $firstname<br>";
        echo "Last Name: $lastname<br>";
        echo "Favourite Pet: $favouritepet<br>";
    } else {
        echo "Form not submitted correctly.";
    }
} else {
    echo "Invalid request.";
}