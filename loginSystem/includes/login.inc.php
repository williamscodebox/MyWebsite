<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {   
    
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];


} else {
    header("location: ../index.php");
    die();
}