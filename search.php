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
    <link rel="stylesheet" href="css/search.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <main class="page flex flex-col items-center justify-between">
        
    <div class="main flex flex-col justify-center">
        <div class="div">
        <h3 class="pb-5 font-bold text-lg" >Search Results</h3>
       
        <?php
            if (!empty($results)) {
                // var_dump($results);
                foreach ($results as $row) {
                    echo "<p>Username: " . htmlspecialchars($row['username']) . "</p>";
                    echo "<p>Comment: " . htmlspecialchars($row['comment_text']) . "</p>";
                    echo "<hr class='my-2 border-t border-gray-300 w-full'>";
                }
            } else if (empty($userSearch)) {
                echo "<p>No results found</p>";
            } else {
                echo "<p>No results found for '" . htmlspecialchars($userSearch) . "'</p>";
            }
        ?>
        </div>
       
    </div> 
    <div class="div border border-gray-300 ">
            <a href="index.php">Go Back</a>
        </div>

    </main>
    
</body>
</html>