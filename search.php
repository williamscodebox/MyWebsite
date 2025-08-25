<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userSearch = $_POST['usersearch'];

    try {
        require_once 'includes/dbh_inc.php';
      
        $query = "SELECT * FROM comments WHERE username = :usersearch;";
        $stmt = $conn->prepare("$query");

        $stmt->bindParam(':usersearch', $userSearch);
        
        
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // code continues here

        $conn = null;
        $stmt = null;


        die();

        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }

} else {

    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="page flex flex-row items-center justify-around">
        
    <div class="main flex flex-col items-center justify-center">
        <div class="div">
        <h3 class="pb-1" >Search Results</h3>
       
        <?php
            if (!empty($results)) {
                foreach ($results as $row) {
                    echo "<p>Username: " . htmlspecialchars($row['username']) . "</p>";
                    echo "<p>Comment: " . htmlspecialchars($row['comment']) . "</p>";
                    echo "<hr>";
                }
            } else {
                echo "<p>No results found for '" . htmlspecialchars($userSearch) . "'</p>";
            }
        ?>
        </div>
    </div>

    </main>
    
</body>
</html>