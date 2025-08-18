<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Welcome to My Website</p>
    <?php
    // Here we output a string into the browser
    /*    This is a multi-line comment.
        It can span multiple lines. */
    if(true) {
    echo "Hello, World!";
}
    ?>
    <?php if (true) {?>
        <p>This is some HTML text.</p>
        <p>Another <?php echo "awesome" ?> line of text.</p>
    <?php } ?>
</body>
</html>