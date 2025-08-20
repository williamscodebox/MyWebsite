<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$fruits = ["apple", "banana", "cherry"];
foreach ($fruits as $fruit) {
    echo "<p>" . ucfirst($fruit) . "</p>";
}

?>
    
</body>
</html>