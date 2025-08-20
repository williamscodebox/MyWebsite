<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="number" name="num01" placeholder="Number one" required>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num02" placeholder="Number two" required>
            <button type="submit">Calculate</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       echo "<script>console.log('PHP Log: input submitted');</script>";

       // Grab data from inputs
       // Sanitize inputs

       $num01 = filter_input(INPUT_POST,'num01', FILTER_SANITIZE_NUMBER_FLOAT);
       $num02 = filter_input(INPUT_POST,'num02', FILTER_SANITIZE_NUMBER_FLOAT);
       $operator = htmlspecialchars($_POST['operator']);

       // Validate inputs
       // Error handling

       $errors = false;

       if (empty($num01) || empty($num02) || empty($operator)) {
           echo "<p>Please fill in all fields.</p>";
           $errors = true;
       }
         
       if (!is_numeric($num01) || !is_numeric($num02)) {
              echo "<p>Both numbers must be numeric.</p>";
              $errors = true;
       }

       // Perform calculation if no errors
       if (!$errors) {
           switch ($operator) {
               case 'add':
                   $result = $num01 + $num02;
                   break;
               case 'subtract':
                   $result = $num01 - $num02;
                   break;
               case 'multiply':
                   $result = $num01 * $num02;
                   break;
               case 'divide':
                   if ($num02 == 0) {
                       echo "<p>Cannot divide by zero.</p>";
                       $errors = true;
                   } else {
                       $result = $num01 / $num02;
                   }
                   break;
               default:
                   echo "<p>Invalid operator selected.</p>";
                   $errors = true;
           }

           // Output result if no errors
           if (!$errors) {
               echo "<p>Result: " . htmlspecialchars($result) . "</p>";
           }
       }
    }

    ?>
    
</body>
</html>