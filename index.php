<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "Hello, World!";
    echo strlen($string);
    echo "<br>";
    echo strpos($string, "World");
    echo "<br>";
    echo str_replace("World", "PHP", $string);
    ?>
</body>
</html>