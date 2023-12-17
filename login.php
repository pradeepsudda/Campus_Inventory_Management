<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Query the database to check credentials
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Authentication successful
            $_SESSION['username'] = $username;
            header('Location:home.php');
            exit;
        } else {
            header('Location:index.php');
        }
    }
    
}


?>

