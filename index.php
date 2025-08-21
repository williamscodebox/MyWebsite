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

$tasks = [
    ["laundry" => "Daniel", "completed" => true],
    ["trash" => "Bella", "completed" => false],
    ["dishes" => "Freddy", "completed" => true],
];

if ($tasks[1]["completed"] === false) {
    echo "<p>" . $tasks[1]["trash"] . " needs to take out the trash.</p>";
}

print_r($tasks);
echo "<br>";
echo "<br>";
echo count($tasks);

?>
    
</body>
</html>